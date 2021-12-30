const loginForm = document.querySelector("#loginForm");
const inputWriter = document.querySelector(".loginInput");
const inputSubmit = document.querySelector(".loginSubmit");

const paintGreeting = (text) => {
    const name = document.createElement("h2");
    name.setAttribute("class", "name")
    name.innerText = `반가워요 ${text}`;
    loginForm.classList.add("hidden");
    document.body.prepend(name)
}

const loginOk = e => {
    e.preventDefault();
    text = inputWriter.value;
    paintGreeting(text);
    localStorage.setItem("yourName", text);
}

const getYourName = localStorage.getItem("yourName");

if(!getYourName){
    loginForm.addEventListener("submit", loginOk)
    loginForm.classList.remove("hidden");
} else {
    paintGreeting(getYourName);
}
