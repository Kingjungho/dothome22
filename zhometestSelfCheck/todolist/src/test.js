const date = document.querySelector('.date')
const listAddBtn = document.querySelector('.addBtn')
const inputWrite = document.querySelector('#footer input')
const item = document.querySelector('.item .itemName')
const deleteBtn = document.querySelector('.item .deleteBtn')
const list = document.querySelector('#section .list')
const form = document.querySelector('#footer form')
const allDelte = document.querySelector('#footer .allDelte')

// 시간
const nowClick = () => {
  const nowDate = new Date()
  const hours = String(nowDate.getHours()).padStart(2, 0)
  const minutes = String(nowDate.getMinutes()).padStart(2, 0)
  const seconds = String(nowDate.getSeconds()).padStart(2, 0)
  const ap = hours > 12 ? ' PM' : ' AM'
  date.innerHTML = `${ap} ${hours} : ${minutes} : ${seconds} `
  return date.innerHTML
}
nowClick()
setInterval(nowClick, 1000)

let todos = []
const TODOS_KEY = 'todos'

function saveTodo() {
  localStorage.setItem(TODOS_KEY, JSON.stringify(todos))
}

const deleteMenu = e => {
  const target = e.target.dataset.targetId
  let elem = e.target
  if (target) {
    const deleteList = document.querySelector(`.listItems[data-id='${target}']`)
    deleteList.remove();
  }
  while(!elem.classList.contains("listItems")){
    elem = elem.parentNode
  }
  todos = todos.filter(list => list.id !== +elem.dataset.id)
  saveTodo();
}

const addListHandler = () => {
  const text = inputWrite.value
  if (text === '') {
    inputWrite.focus()
    return
  }
  const todoText = {
    text: text,
    id: Date.now(),
  }
  const newItem = itemList(todoText)
  list.append(newItem)
  todos.push(todoText)
  saveTodo()

  inputWrite.focus()
  inputWrite.value = ''
  newItem.scrollIntoView({ behavior: 'smooth', block: 'center' })
}

const savedTodos = localStorage.getItem(TODOS_KEY)

if (savedTodos) {
  const parseTodos = JSON.parse(savedTodos)
  todos = parseTodos
  console.log(parseTodos)
  parseTodos.forEach(el => {
    list.append(itemList(el))
  })
}

function itemList(text) {
  const listItems = document.createElement('ul')
  listItems.setAttribute('class', 'listItems')
  listItems.setAttribute('data-id', text.id)
  listItems.innerHTML = `
        <li class="item">
            <span class="itemName">${text.text}</span>
            <button class="deleteBtn"><i class="far fa-trash-alt" data-target-id="${
              text.id
            }"></i>${nowClick()}</button>
        </li>
        <div class="divider"></div>
        `
  return listItems
}



listAddBtn.addEventListener('click', addListHandler)
list.addEventListener('click', deleteMenu)
form.addEventListener('submit', e => {
  e.preventDefault()
  addListHandler()
})
allDelte.addEventListener('click', e => {
  e.preventDefault()
  const listChild = list.children
  for (let i = 0; i < listChild.length; i++) {
    list.removeChild(listChild[i])
    i--
  }
})
