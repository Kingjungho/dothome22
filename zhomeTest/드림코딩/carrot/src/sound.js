const bugSound = new Audio('./sound/bug_pull.mp3');
const bgSound = new Audio('./sound/bg.mp3');
const carrotSound = new Audio('./sound/carrot_pull.mp3');
const alertSound = new Audio('./sound/alert.wav');
const winSound = new Audio('./sound/game_win.mp3');


export function playBugSound(){
    playSound(bugSound);
}
export function playCarrotSound(){
    playSound(carrotSound);
}
export function playBgSound(){
    playSound(bgSound);
}
export function playAlertSound(){
    playSound(alertSound);
}
export function playWinSound(){
    playSound(winSound);
}
export function stopBgSound(){
    pauseSound(bgSound);
}






const playSound = (sound) => {
    sound.currentTime = 0;
    sound.play();
}
const pauseSound = (sound) => {
    sound.pause();
}