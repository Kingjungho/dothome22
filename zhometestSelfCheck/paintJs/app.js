const canvas = document.querySelector("#jsCanvas");
const ctx = canvas.getContext("2d");
const color = document.querySelector(".controls__colors");
const range = document.querySelector("#jsRange");
const fill = document.querySelector("#jsMode");
const saveImage = document.querySelector("#jsSave");

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

if(canvas){
  canvas.addEventListener("mousemove", onMouseMove)
  canvas.addEventListener("mousedown", startPainting)
  canvas.addEventListener("mouseup", stopPainting)
  canvas.addEventListener("mouseleave", stopPainting)
  canvas.addEventListener("click", handleCanvasFiling)
}

const colorChange = e => {
  const target = e.target.style.backgroundColor;
  console.log(target)
  if(target){
    ctx.strokeStyle = `${target}`
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

color.addEventListener("click", colorChange)
fill.addEventListener("click", fillCanvas)
range.addEventListener("input", changeRange)
