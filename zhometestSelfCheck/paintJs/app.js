const canvas = document.querySelector("#jsCanvas");
const ctx = canvas.getContext("2d");
const color = document.querySelector(".controls__colors");

canvas.width = 500;
canvas.height = 500;


ctx.strokeStyle = "#2c2c2c"
ctx.lineWidth = 2.5;

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
    const backGround = e.target.style.setProperty(`background-color`, target)
    ctx.strokeStyle =`${backGround}`
  }
}

color.addEventListener("click", colorChange)