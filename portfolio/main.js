    //이펙트 스크립트
    const order = document.querySelectorAll(".descBox.order span");
    const number = document.querySelectorAll(".descBox.menu");
    const frame = document.querySelectorAll("#section8 .frameCss iframe");

    const menuView = e => {
        if (e.target.textContent === "1") {
            order.forEach(el => {
                el.innerHTML = "1"
            })
            frame.forEach(el => {
                el.src = "https://kingjungho.github.io/dothome22/refer-effect/ParallaxEffect/javascriptPE01.html"
            })
        } else {
            
        }
        if (e.target.textContent === "2") {
            order.forEach(el => {
                el.innerHTML = "2"
            })
            frame.forEach(el => {
                el.src = "https://kingjungho.github.io/dothome22/refer-effect/ParallaxEffect/javascriptPE02.html"
            })
        }
        if (e.target.textContent === "3") {
            order.forEach(el => {
                el.innerHTML = "3"
            })
            frame.forEach(el => {
                el.src = "https://kingjungho.github.io/dothome22/refer-effect/ParallaxEffect/javascriptPE03.html"
            })
        }
        if (e.target.textContent === "4") {
            order.forEach(el => {
                el.innerHTML = "4"
            })
            frame.forEach(el => {
                el.src = "https://kingjungho.github.io/dothome22/refer-effect/ParallaxEffect/javascriptPE04.html"
            })
        }
        if (e.target.textContent === "5") {
            order.forEach(el => {
                el.innerHTML = "5"
            })
            frame.forEach(el => {
                el.src = "https://kingjungho.github.io/dothome22/refer-effect/ParallaxEffect/javascriptPE05.html"
            })
        }
        if (e.target.textContent === "6") {
            order.forEach(el => {
                el.innerHTML = "6"
            })
            frame.forEach(el => {
                el.src = "https://kingjungho.github.io/dothome22/refer-effect/ParallaxEffect/javascriptPE06.html"
            })
        }
        if (e.target.textContent === "7") {
            order.forEach(el => {
                el.innerHTML = "7"
            })
            frame.forEach(el => {
                el.src = "https://kingjungho.github.io/dothome22/refer-effect/ParallaxEffect/javascriptPE07.html"
            })
        }
        if (e.target.textContent === "8") {
            order.forEach(el => {
                el.innerHTML = "8"
            })
            frame.forEach(el => {
                el.src = "https://kingjungho.github.io/dothome22/refer-effect/ParallaxEffect/javascriptPE08.html"
            })
        }
    }

    number.forEach(el => {
        el.addEventListener("click", menuView)
    })

    //MY SELF PROJECT 스크립트

    const overView = document.querySelectorAll(".list");
    const overViewDesc = document.querySelectorAll(".list__desc");
    let currentMenu;

    const overViewList = e => {
        
        if(currentMenu){
            currentMenu.classList.remove("active")
        }
        if(e.target.classList.contains("list__name")){
            e.target.classList.add("active");        
            currentMenu = e.target;
        }
    }

    overView.forEach(el => {
        el.addEventListener("mouseover", overViewList)
    })