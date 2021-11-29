'use strict'

import PopUp from './popup.js'


//게임 시스템
const gameBtn = document.querySelector(".game__button");
const timerText = document.querySelector(".game__timer");
const gameScore = document.querySelector(".game__score");
const field = document.querySelector(".game__field");
const fieldRect = field.getBoundingClientRect();

// 사운드
const bugSound = new Audio('./sound/bug_pull.mp3');
const bgSound = new Audio('./sound/bg.mp3');
const carrotSound = new Audio('./sound/carrot_pull.mp3');
const alertSound = new Audio('./sound/alert.wav');
const winSound = new Audio('./sound/game_win.mp3');


const CARROT_COUNT = 10;
const CARROT_SIZE = 80;
const REMAIN_TIME = 10;

let timer;
let started = false;
let score = 0;

const finishGameBoard = new PopUp();
finishGameBoard.setClickListener(() => {
    gameStart();
    gameBtn.style.visibility = 'visible'
})

gameBtn.addEventListener("click", () => {
    if(started){
        gameStop();
    } else {
        gameStart()
    }
})


const gameStart = () => {
    started = true;
    showBtnChange();
    initGame();
    gameTimer();
    finishGameBoard.hide();
    playSound(bgSound)
}

const gameStop = () => {
    started = false;
    finishGameBoard.TextAndIcon('Replay?')
    clearInterval(timer);
    gameBtn.style.visibility = 'hidden'
    playSound(alertSound)
    pauseSound(bgSound)
}

const gameTimer = () => {
    let remainingTime = REMAIN_TIME;
    boardTextRemainingTime(remainingTime);
    timer = setInterval(() => {
        if(remainingTime <= 0){
            clearInterval(timer);
            finishGame(CARROT_COUNT === score)
            return;
        }
        boardTextRemainingTime(--remainingTime);
    }, 1000)
}

field.addEventListener("click", e => {
    const target = e.target;
    if(!started){
        return;
    }
    if(target.matches('.carrot')){
        target.remove();
        score++;
        playSound(carrotSound)
        scoreBoardText(score);
        if(CARROT_COUNT === score){
            finishGame(true)
            playSound(winSound);
        }
    } else if (target.matches('.bug')){
        finishGame(false)
        playSound(bugSound)
    }
})



const finishGame = (win) => {
    clearInterval(timer);
    finishGameBoard.TextAndIcon(win ? 'you Won!' : 'you Loser')
    gameBtn.style.visibility = 'hidden'
    pauseSound(bgSound)
}

const scoreBoardText = (score) => {
    gameScore.innerText = CARROT_COUNT - score;
}

const boardTextRemainingTime = (time) => {
    const minutes = Math.floor(time / 60);
    const seconds = String(time % 60).padStart('2', 0)
    timerText.innerText = `${minutes} : ${seconds}`
}
const initGame = () => {
    field.innerHTML = '';
    gameScore.innerHTML = CARROT_COUNT
    score = 0;
    addItem('carrot', CARROT_COUNT, 'img/carrot.png')
    addItem('bug', CARROT_COUNT, 'img/bug.png')
}

const addItem = (className, count, imgName) => {
    for (let i = 0; i < count; i++) {
        const item = document.createElement("img");
        item.setAttribute('class', className);
        item.src = imgName;
        item.style.position = 'absolute';
        const x1 = 0;
        const y1 = 0;
        const x2 = fieldRect.width - CARROT_SIZE;
        const y2 = fieldRect.height - CARROT_SIZE;
        const x = randomNumber(x1, x2);
        const y = randomNumber(y1, y2);
        item.style.left = `${x}px`;
        item.style.top = `${y}px`;
        field.appendChild(item);
    }
}

const showBtnChange = () => {
    const icon = document.querySelector(".fas");
    icon.classList.remove("fa-play");
    icon.classList.add("fa-stop");
}



function randomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

const playSound = (sound) => {
    sound.currentTime = 0;
    sound.play();
}
const pauseSound = (sound) => {
    sound.pause();
}