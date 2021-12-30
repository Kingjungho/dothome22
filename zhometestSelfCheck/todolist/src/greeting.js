const loginForm = document.querySelector("#loginForm");
const inputWriter = document.querySelector(".loginInput");
const inputSubmit = document.querySelector(".loginSubmit");

const paintGreeting = (text) => {
    const name = document.createElement("h2");
    name.innerText = `hello ${text}`;
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
    inputSubmit.addEventListener("submit", loginOk)
} else {
    paintGreeting(getYourName);
    loginForm.classList.add("hidden");
}
