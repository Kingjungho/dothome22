const toDoForm = document.getElementById("todo-form");
const toDoInput = toDoForm.querySelector("input");
// const toDoInput = document.querySelector("#todo-form input");
const toDoList = document.getElementById("todo-list");

const TODOS_KEY = "todos";

const toDos = [];

function saveToDos(){
    localStorage.setItem(TODOS_KEY, JSON.stringify(toDos))
}

function deleteTodo(event){
   const li = event.target.parentElement;
   li.remove();
}

function handlePrintSubmit(newTodo){
    const li = document.createElement("li");
    const span = document.createElement("span");
    span.innerText = newTodo;
    const button = document.createElement("button");
    button.innerText = "X"
    button.addEventListener("click", deleteTodo)
    li.appendChild(span);
    li.appendChild(button);
    toDoList.appendChild(li);
}
 


function handleToDoSubmit(event){
    event.preventDefault();
    const newTodo = toDoInput.value;
    toDoInput.value = "";
    toDos.push(newTodo);
    handlePrintSubmit(newTodo);
    saveToDos()
}

toDoForm.addEventListener("submit", handleToDoSubmit);

// function sayHello(item){
//     console.log("this is the turn of", item)
// }


const savedToDos = localStorage.getItem(TODOS_KEY);

if(savedToDos){
    const parsedToDos = JSON.parse(savedToDos);
    parsedToDos.forEach(item => {
        console.log("this is the turn of", item)
    })
    }