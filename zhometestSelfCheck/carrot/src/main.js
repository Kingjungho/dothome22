'use strict'

// 게임 진행 기능
const gameBtn = document.querySelector(".game__button");
const gameTimer = document.querySelector(".game__timer");
const gameScore = document.querySelector(".game__score");
const field = document.querySelector(".game__field");
const fieldRect = field.getBoundingClientRect();


//팝업
const popUp = document.querySelector(".pop-up");
const popUpMessage = document.querySelector(".pop-up__message");
const refreshBtn = document.querySelector(".pop-up__refresh");

const CARROT_COUNT = 10;
const CARROT_SIZE = 80;
let timer;
let started = false;
const DURATION_TIME = 15;
let score = 0;


const startGameBtn = () => {
    if (started) {
        gameStop()
    } else {
        gameStart()
    }
}


const gameStart = () => {
    started = true;
    Btn();
    init();
    gameTimerText();
    gameBtn.style.visibility = "visible";
}

const gameStop = () => {
    started = false;
    finishGame();
    boardText('Replay?')
    timerStop();
}

const finishGame = win => {
    popUp.classList.remove("pop-up-hide");
    boardText(win? 'you win' : 'you Lose')
    timerStop();
    gameBtn.style.visibility = "hidden";
}


const boardText = text => {
    popUpMessage.innerText = text;
}

const init = () => {
    score = 0;
    field.innerHTML = '';
    gameScore.innerHTML = CARROT_COUNT;
    addItem("carrot", CARROT_COUNT, "img/carrot.png");
    addItem("bug", CARROT_COUNT, "img/bug.png");
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

const itemClickHandler = e => {
    if(!started){
        return;
    }
    const target = e.target
    if (target.matches('.carrot')) {
        target.remove();
        score++;
        carrotCount(score);
        if (score === CARROT_COUNT) {
            finishGame(true)
        }
    } else if (target.matches('.bug')) {
        started = false;
        finishGame(false);
    }
}

const carrotCount = (score) => {
    gameScore.innerHTML = CARROT_COUNT - score
}

const randomLocation = (min, max) => {
    return Math.random() * (max - min) + min;
}

const Btn = () => {
    const icon = document.querySelector(".fas");
    icon.classList.add("fa-stop");
    icon.classList.remove("fa-play");
}

const timerStop = () => {
    clearInterval(timer);
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
            finishGame(false);
            return;
        }
        timerRemain(--remainTime)
    }, 1000)
}

gameBtn.addEventListener("click", startGameBtn);
field.addEventListener("click", itemClickHandler)
refreshBtn.addEventListener("click", () => {
    gameStart();
    popUp.classList.add("pop-up-hide");
})