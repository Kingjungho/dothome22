const canvas = document.querySelector("#jsCanvas");
const ctx = canvas.getContext("2d");
const color = document.querySelector(".controls__colors");
const range = document.querySelector("#jsRange");
const blur = document.querySelector("#jsBlur");
const fill = document.querySelector("#jsMode");
const saveImage = document.querySelector("#jsSave");
const reset = document.querySelector("#jsReset")
const bringIt = document.querySelector("#jsBringIt")

let CANVAS_SIZE = 500;

canvas.width = CANVAS_SIZE;
canvas.height = CANVAS_SIZE;

ctx.strokeStyle = "#000000"
ctx.fillStyle = "#000000"
ctx.lineWidth = 2.5;


let filling = false;
let painting = false;

function stopPainting(){
  painting = false;
}

function startPainting(){
  painting = true;
}

function onMouseMove(event){
  const x = event.offsetX;
  const y = event.offsetY;
  if(!painting){
    ctx.beginPath()
    ctx.moveTo(x, y)
  } else {
    ctx.lineTo(x, y);
    ctx.stroke();
  }
}

const handleCanvasFiling = () => {
  if(filling){
    ctx.fillRect(0, 0, CANVAS_SIZE, CANVAS_SIZE)
  }
}

const rightMouseClickHandler = e => {
  e.preventDefault();
}

if(canvas){
  canvas.addEventListener("mousemove", onMouseMove)
  canvas.addEventListener("mousedown", startPainting)
  canvas.addEventListener("mouseup", stopPainting)
  canvas.addEventListener("mouseleave", stopPainting)
  canvas.addEventListener("click", handleCanvasFiling)
  canvas.addEventListener("contextmenu", rightMouseClickHandler)
}

const colorChange = e => {
  const target = e.target.style.backgroundColor;
  if(target){
    ctx.strokeStyle = target
    ctx.fillStyle = ctx.strokeStyle
  }
}

const fillCanvas = () => {
  if(filling === true){
    filling = false;  
    fill.innerText = "FILL"
  } else {
    filling = true;
    fill.innerText = "PAINT"
  }
}

const changeRange = e => {
  size = e.target.value;
  ctx.lineWidth = size;
}

const changeBlur = e => {
  const blurSize = e.target.value;
  canvas.style["-webkit-filter"] = `blur(${blurSize}px)`
  
}

const savingImage = () => {
  const answer = confirm("저장해요?🙄");
  if(answer === true){
    const link = document.createElement("a");
    link.href = canvas.toDataURL("image/png")
    link.download = '내가그린그림';
    link.click();
  }
}

const canvasReset = () => {
  ctx.fillStyle = "white"
  ctx.fillRect(0, 0, CANVAS_SIZE, CANVAS_SIZE)
}



color.addEventListener("click", colorChange);
fill.addEventListener("click", fillCanvas);
range.addEventListener("input", changeRange);
blur.addEventListener("input", changeBlur);
saveImage.addEventListener("click", savingImage);
reset.addEventListener("click", canvasReset);



// 캔버스에 이미지 추가하기
function addToCanvas() {
  let imageArray = ["bg2.jpg", "bg6.jpg", "bg9.jpg", "bg10.jpg"];
  let randomArray = imageArray[Math.floor(Math.random() * imageArray.length)]
  let img = new Image;
    img.src = `/refer-effect/assets/img/${randomArray}`
    console.log(img.src = `/refer-effect/assets/img/${randomArray}`)
    ctx.drawImage(img, 0, 0, CANVAS_SIZE, CANVAS_SIZE);
};

bringIt.addEventListener("click", addToCanvas)