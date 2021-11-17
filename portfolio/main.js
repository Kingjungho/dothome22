const imgWrap = document.querySelector(".introduce");

const imgOver = (e) => {
    e.target.classList.add("active")
}

imgWrap.addEventListener("mouseover", imgOver)
