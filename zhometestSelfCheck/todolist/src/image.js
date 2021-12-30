const imgs = ["todolistOne.jpg", "todolistTwo.jpg", "todolistThree.jpg"];
const randomImg = imgs[Math.floor(Math.random() * imgs.length)]
const img = document.createElement("img");

img.src = `img/${randomImg}`;
img.style.position = "absolute"
img.style.left = "0"
img.style.top = "0"
img.style.width = "100%"
img.style.height = "100%"
img.style.zIndex = "-10000"
img.style.filter = "brightness(60%)"

document.body.appendChild(img);