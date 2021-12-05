const loginForm = document.querySelector("#login-form");
const loginInput = document.querySelector("#login-form input");
const greeting = document.querySelector("#greeting");

USERNAME_HIDDEN = "hidden"
INPUT_NAME = "username"
const onLoginForm = e => {
    e.preventDefault();
    const text = loginInput.value;
    loginForm.classList.add(USERNAME_HIDDEN);
    localStorage.setItem(INPUT_NAME, text);
    paintGreeting(text);
}

const paintGreeting = (text) => {
    greeting.innerText = `Hello ${text}`
    greeting.classList.remove(USERNAME_HIDDEN)
}

const savedUserName = localStorage.getItem(INPUT_NAME)

if(!savedUserName){
    loginForm.classList.remove(USERNAME_HIDDEN);
    loginForm.addEventListener("submit", onLoginForm)
} else {
    paintGreeting(savedUserName);
}

