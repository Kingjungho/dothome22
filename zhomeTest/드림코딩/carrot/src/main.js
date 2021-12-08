'use strict'

// 게임 진행 기능
const gameBtn = document.querySelector(".game__button");
const gameTimer = document.querySelector(".game__timer");
const gameScore = document.querySelector(".game__score");
const field = document.querySelector(".game__field");
const fieldRect = field.getBoundingClientRect();


//팝업
const popUp = document.querySelector(".pop-up");
console.log(popUp)

const CARROT_COUNT = 10;
const CARROT_SIZE = 80;
let timer;
let started = false;
const DURATION_TIME = 65;


const startGameBtn = () => {
    if (started) {
        gameStop()
    } else {
        gameStart()
    }
}

const gameStart = () => {
    started = true;
    init();
    gameTimerText();
    Btn();
}

const gameStop = () => {
    started = false;
    stopGameBanner();
}

const stopGameBanner = () => {
    popUp.classList.remove("pop-up-hide");
    clearInterval(timer)
}

const init = () => {
    field.innerHTML = '';
    addItem("carrot", CARROT_COUNT, "img/carrot.png");
    addItem("bug", CARROT_COUNT, "img/bug.png");
    gameScore.innerHTML = CARROT_COUNT;
}

const addItem = (name, count, imgPath) => {
    let x1 = 0;
    let y1 = 0;
    let x2 = fieldRect.width - CARROT_SIZE;
    let y2 = fieldRect.height - CARROT_SIZE;
    for (let i = 0; i < count; i++) {
        const item = document.createElement("img");
        item.setAttribute("class", name);
        item.src = imgPath;
        item.style.position = "absolute";
        const x = randomLocation(x1, x2);
        const y = randomLocation(y1, y2);
        item.style.left = `${x}px`
        item.style.top = `${y}px`
        field.appendChild(item);
    }
}

const randomLocation = (min, max) => {
    return Math.random() * (max - min) + min;
}

const Btn = () => {
    const icon = document.querySelector(".fas");
    icon.classList.add("fa-stop");
    icon.classList.remove("fa-play");
}


const timerRemain = time => {
    const minutes = Math.floor(time / 60);
    const seconds = String(time % 60).padStart(2, "0");
    gameTimer.innerHTML = `${minutes} : ${seconds}`;
}

const gameTimerText = () => {
    let remainTime = DURATION_TIME;
    timerRemain(remainTime)
    timer = setInterval(() => {
        if (remainTime <= 0) {
            clearInterval(timer)
            return;
        }
        timerRemain(--remainTime)
    }, 1000)
}

gameBtn.addEventListener("click", startGameBtn)