'use strict'

import PopUp from './popup.js';
import Field from './field.js'
import * as sound from './sound.js'

// 게임 진행 기능
const gameBtn = document.querySelector(".game__button");
const gameTimer = document.querySelector(".game__timer");
const gameScore = document.querySelector(".game__score");

const CARROT_COUNT = 10;
const BUG_COUNT = 10;

let timer;
let started = false;
const DURATION_TIME = 15;
let score = 0;

const gamePopUpBoard = new PopUp();
const gameField = new Field(CARROT_COUNT, BUG_COUNT);

gamePopUpBoard.setClickListener(() => {
    gameStart();
    gamePopUpBoard.hide();
})


const onItemClick = item => {
    if(!started){
        return;
    }
    if (item === 'carrot') {
        score++;
        carrotCount(score);
        if (score === CARROT_COUNT) {
            finishGame(true)
        }
    } else if (item === 'bug') {
        finishGame(false);
    }
}
gameField.setClickListener(onItemClick)

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
    sound.playBgSound();
}

const gameStop = () => {
    started = false;
    finishGame();
    gamePopUpBoard.TextAndIcon('Replay?');
    timerStop();
    sound.playBugSound();
    sound.pauseBgSound();
}

const finishGame = win => {
    if(win) {
        sound.playWinSound();
        sound.pauseBgSound();
    } else {
        sound.playBugSound();
        sound.pauseBgSound();
    }
    gamePopUpBoard.TextAndIcon(win? 'you win' : 'you Lose')
    timerStop();
    gameBtn.style.visibility = "hidden";
}

const init = () => {
    score = 0;
    gameScore.innerHTML = CARROT_COUNT;
    gameField.init();
}




const carrotCount = (score) => {
    gameScore.innerHTML = CARROT_COUNT - score
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

