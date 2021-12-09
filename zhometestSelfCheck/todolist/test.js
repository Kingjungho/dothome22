const date = document.querySelector(".date");
const listAddBtn = document.querySelector(".addBtn");
const inputWrite = document.querySelector("#footer input");
const item = document.querySelector(".item .itemName");
const deleteBtn = document.querySelector(".item .deleteBtn");
const list = document.querySelector("#section .list");
const form = document.querySelector("#footer form");
const allDelte = document.querySelector("#footer .allDelte");

// 시간
const nowClick = () => {
    const nowDate = new Date();
    const hours = String(nowDate.getHours()).padStart(2, 0);
    const minutes = String(nowDate.getMinutes()).padStart(2, 0);
    const seconds = String(nowDate.getSeconds()).padStart(2, 0);
    const ap = hours > 12 ? " PM" : " AM";
    date.innerHTML = `등록시간 :${ap} ${hours} : ${minutes} : ${seconds} 👍`
    return date.innerHTML;
}
nowClick();
setInterval(nowClick, 1000);



const addList = () => {
    const text = inputWrite.value;
    if(text === ""){
        inputWrite.focus();
        return;
    }
    localStorage.setItem("listname", text)
    const newItem = itemList(text);
    list.appendChild(newItem);
    localStorage.getItem("listname")
    inputWrite.focus();
    inputWrite.value = '';
    newItem.scrollIntoView({behavior:"smooth", block: 'center'})
}
    id = 0;
    function itemList(text) {
        const listItems = document.createElement("ul")
        listItems.setAttribute("class", "listItems");
        listItems.setAttribute("data-id", id)
        listItems.innerHTML = `
        <li class="item">
            <span class="itemName">${text}</span>
<button class="deleteBtn"><i class="far fa-trash-alt" data-target-id="${id}"></i>${nowClick()}</button>
        </li>
        <div class="divider"></div>
        `
        id++;
        return listItems;
    }
const deleteMenu = e => {
    const target = e.target.dataset.targetId
    if (target){
        const deleteList = document.querySelector(`.listItems[data-id='${target}']`);
        deleteList.remove();
    }
}

listAddBtn.addEventListener("click", addList)
list.addEventListener("click", deleteMenu)
form.addEventListener("submit", e => {
    e.preventDefault();
    addList()
})
allDelte.addEventListener("click", () => {
    const listChild = list.children;
    for(let i = 0; i < listChild.length; i++){
        list.removeChild(listChild[i]);
        i--;
    }
})

const imgs = ["bg3.jpg", "bg6.jpg", "bg9.jpg"];
const randomImg = imgs[Math.floor(Math.random() * imgs.length)]
const img = document.createElement("img");
img.src = `img/${randomImg}`;
img.style.position = "absolute"
img.style.left = "0"
img.style.top = "0"
img.style.width = "100%"
img.style.zIndex = "-10000"
img.style.filter = "brightness(60%)"
document.body.appendChild(img);

