const bgSound = new Audio('./sound/bg.mp3');
const alertSound = new Audio('./sound/alert.wav');
const carrotSound = new Audio('./sound/carrot_pull.mp3');
const bugSound = new Audio('./sound/bug_pull.mp3');
const winSound = new Audio('./sound/game_win.mp3');



export const playBgSound = () => {
    playSound(bgSound);
}
export const pauseBgSound = () => {
    pauseSound(bgSound);
}
export const playAlertSound = () => {
    playSound(alertSound);
}

export const playCarrotSound = () => {
    playSound(carrotSound);
}

export const playBugSound = () => {
    playSound(bugSound);
}

export const playWinSound = () => {
    playSound(winSound);
}



const playSound = (sound) => {
    sound.currentTime = 0;
    sound.play();
}
const pauseSound = (sound) => {
    sound.pause();
}