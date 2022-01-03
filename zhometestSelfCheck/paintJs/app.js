const canvas = document.querySelector("#jsCanvas");
const ctx = canvas.getContext("2d");
const color = document.querySelector(".controls__colors");
const fill = document.querySelector("#jsMode");
const saveImage = document.querySelector("#jsSave");

let CANVAS_SIZE = 500;

canvas.width = CANVAS_SIZE;
canvas.height = CANVAS_SIZE;


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

if(canvas){
  canvas.addEventListener("mousemove", onMouseMove)
  canvas.addEventListener("mousedown", startPainting)
  canvas.addEventListener("mouseup", stopPainting)
  canvas.addEventListener("mouseleave", stopPainting)
}

const colorChange = e => {
  const target = e.target.dataset.id
  console.log(target)
  if(target){
    ctx.strokeStyle = `${target}`
  }
}

const fillCanvas = () => {
  if(filling){
    filling = false;
    fill.innerText = "Reset"
  } else {
    filling = true;
    fill.innerText = "FILL"
  }
}

color.addEventListener("click", colorChange)
fill.addEventListener("click", fillCanvas)
