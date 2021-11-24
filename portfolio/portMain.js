    //MY SELF PROJECT 스크립트

    const overView = document.querySelectorAll(".list");
    const overViewDesc = document.querySelectorAll(".list__desc");
    let currentMenu;


    const overViewList = e => {

        if (currentMenu) {
            currentMenu.classList.remove("active")
            currentMenu.nextElementSibling.style.color = "rgba(255, 255, 255, 0.479)";
        }
        if (e.target.classList.contains("list__name")) {
            e.target.classList.add("active");
            e.target.nextElementSibling.style.color = "#fff";
            currentMenu = e.target;
        }
    }

    overView.forEach(el => {
        el.addEventListener("mouseover", overViewList)
    })


    
    
    
    
    //이펙트 스크립트
    const order = document.querySelectorAll(".descBox.order span");
    const number = document.querySelectorAll(".descBox.menu");
    const frame = document.querySelectorAll("#section8 .frameCss iframe");
    
    const menuView = e => {
        for(let i = 1; i<9; i++){
            if (e.target.parentNode.dataset.id === "0" && e.target.textContent === `${i}`) {
                order.forEach(el => {
                    el.innerHTML = `${i}`;
                    frame.forEach(el => {
                        el.src = `https://kingjungho.github.io/dothome22/refer-effect/ParallaxEffect/javascriptPE0${i}.html`
                    })
                })
            }
        }
        for(let i = 1; i<9; i++){
            if (e.target.parentNode.dataset.id === "1" && e.target.textContent === `${i}`) {
                order.forEach(el => {
                    el.innerHTML = `${i}`;
                    frame.forEach(el => {
                        el.src = `https://kingjungho.github.io/dothome22/refer-effect/sliderEffect/javascriptSE0${i}.html`
                    })
                })
            }
        }
        for(let i = 1; i<9; i++){
            if (e.target.parentNode.dataset.id === "2" && e.target.textContent === `${i}`) {
                order.forEach(el => {
                    el.innerHTML = `${i}`;
                    frame.forEach(el => {
                        el.src = `https://kingjungho.github.io/dothome22/refer-effect/mouseEffect/javascriptME0${i}.html`
                    })
                })
            }
        }
        for(let i = 1; i<9; i++){
            if (e.target.parentNode.dataset.id === "3" && e.target.textContent === `${i}`) {
                order.forEach(el => {
                    el.innerHTML = `${i}`;
                    frame.forEach(el => {
                        el.src = `https://kingjungho.github.io/dothome22/refer-effect/GameEffect/quiz/cardGame.html`
                    })
                })
            }
        }
    }

    number.forEach(el => {
        el.addEventListener("click", menuView)
    })

    // contact us 스크립트
    const contactMe = document.querySelector("#section9 .myAderess .adress p");
    const contactMeMove = document.querySelector("#section9 .contactImail");
    const project = document.querySelector("#section .menu2");
    const projectMove = document.querySelector("#section5 #article");
    const about = document.querySelector("#section .menu3");
    const aboutMove = document.querySelector("#section4 .introduce");
    const contact = document.querySelector("#section .menu4");
    const contactMove = document.querySelector("#section9 .myAderess");

    const contactMeClickhandler = () => {
        contactMeMove.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        })
    }
    const projectClickhandler = e => {
        e.preventDefault();
        projectMove.scrollIntoView({
            behavior: 'smooth'
        })
    }
    const aboutClickhandler = e => {
        e.preventDefault();
        aboutMove.scrollIntoView({
            behavior: 'smooth'
        })
    }
    const contactClickhandler = e => {
        e.preventDefault();
        contactMove.scrollIntoView({
            behavior: 'smooth'
        })
    }

    project.addEventListener("click", projectClickhandler)
    about.addEventListener("click", aboutClickhandler)
    contact.addEventListener("click", contactClickhandler)
    contactMe.addEventListener("click", contactMeClickhandler)