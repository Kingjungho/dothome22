'use strict'

import PopUp from './popup.js'
import Field from './field.js'
import * as sound from './sound.js'

//게임 시스템
const gameBtn = document.querySelector(".game__button");
const timerText = document.querySelector(".game__timer");
const gameScore = document.querySelector(".game__score");

const CARROT_COUNT = 10;
const BUG_COUNT = 10;
const REMAIN_TIME = 10;

let timer;
let started = false;
let score = 0;

const finishGameBoard = new PopUp();
const gameField = new Field(CARROT_COUNT, BUG_COUNT);

gameField.setClickListener(onItemClick);

function onItemClick(item){
    if(!started){
        return;
    }
    if(item === 'carrot'){
        score++;
        scoreBoardText(score);
        if(CARROT_COUNT === score){
            finishGame(true)
            sound.playWinSound()
        }
    } else if (item === 'bug'){
        finishGame(false)
        sound.playBugSound()
    }
}

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
    sound.playBgSound();
}

const gameStop = () => {
    started = false;
    finishGameBoard.TextAndIcon('Replay?')
    clearInterval(timer);
    gameBtn.style.visibility = 'hidden'
    sound.playAlertSound();
    sound.stopBgSound();
}

const gameTimer = () => {
    let remainingTime = REMAIN_TIME;
    boardTextRemainingTime(remainingTime);
    timer = setInterval(() => {
        if(remainingTime <= 0){
            clearInterval(timer);
            finishGame(CARROT_COUNT === score)
            sound.playBugSound();
            return;
        }
        boardTextRemainingTime(--remainingTime);
    }, 1000)
}





const finishGame = (win) => {
    started = false;
    clearInterval(timer);
    finishGameBoard.TextAndIcon(win ? 'you Won!' : 'you Loser')
    gameBtn.style.visibility = 'hidden'
    sound.stopBgSound();
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
    gameScore.innerHTML = CARROT_COUNT
    score = 0;
    gameField.init()
}



const showBtnChange = () => {
    const icon = document.querySelector(".fas");
    icon.classList.remove("fa-play");
    icon.classList.add("fa-stop");
}



