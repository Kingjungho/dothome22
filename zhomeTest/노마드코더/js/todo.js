const toDoForm = document.getElementById("todo-form");
const toDoInput = toDoForm.querySelector("input");
// const toDoInput = document.querySelector("#todo-form input");
const toDoList = document.getElementById("todo-list");

const TODOS_KEY = "todos"

let toDos = [];

function saveToDos(){
    localStorage.setItem(TODOS_KEY, JSON.stringify(toDos))
}

function deleteToDo(event) {
    const li = event.target.parentElement;
    console.log(li.id)
    li.remove();
    toDos = toDos.filter(todo => todo.id !== parseInt(li.id))
    saveToDos();
}

function paintToDo(newTodo) {
    const li = document.createElement("li");
    const span = document.createElement("span");
    li.appendChild(span);
    li.id = newTodo.id;
    span.innerText = newTodo.text;
    const button = document.createElement("button");
    button.innerText = "❌";
    button.addEventListener("click", deleteToDo);
    li.appendChild(button);
    li.appendChild(span);
    toDoList.appendChild(li);
}

const handleToDoSubmit = event => {
    event.preventDefault();
    const newToDo = toDoInput.value;
    toDoInput.value = "";
    const toDosObj = {
        text : newToDo,
        id : Date.now(),
    }
    toDos.push(toDosObj);
    paintToDo(toDosObj);
    saveToDos();
}

toDoForm.addEventListener("submit", handleToDoSubmit);

const savedToDos = localStorage.getItem(TODOS_KEY);

if(savedToDos){
    const parseToDos = JSON.parse(savedToDos);
    console.log(parseToDos)
    toDos = parseToDos;
    console.log(toDos)
    parseToDos.forEach(paintToDo);
}