//MY SELF PROJECT 메뉴 깜박임 효과
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
const parallaxNumber = document.querySelector(".descBox.menu.One");
const parallaxOrder = document.querySelector(".descBox.order.One span");
const parallaxFrame = document.querySelectorAll("#section7 .frameCss .parallaxFrame");
const sliderNumber = document.querySelector(".descBox.menu.Two");
const sliderOrder = document.querySelector(".descBox.order.Two span");
const sliderFrame = document.querySelectorAll("#section7 .frameCss .sliderFrame");
const mouseNumber = document.querySelector(".descBox.menu.Three");
const mouseOrder = document.querySelector(".descBox.order.Three span");
const mouseFrame = document.querySelectorAll("#section7 .frameCss .mouseFrame");
const gameNumber = document.querySelector(".descBox.menu.Four");
const gameOrder = document.querySelector(".descBox.order.Four span");
const gameFrame = document.querySelectorAll("#section7 .frameCss .gameFrame");


const parallaxView = e => {
    for (let i = 1; i <= parallaxNumber.children.length; i++) {
        menuActive(e.target)
        if (e.target.parentNode.dataset.id === "0" && e.target.textContent === `${i}`) {
            parallaxOrder.innerText = `${i}`;
            parallaxFrame.forEach(el => {
                el.src = `https://kingjungho.github.io/dothome22/refer-effect/ParallaxEffect/javascriptPE0${i}.html`
            })
        }
    }
}
const sliderView = e => {
    for (let i = 1; i <= sliderNumber.children.length; i++) {
        menuActive(e.target)
        if (e.target.parentNode.dataset.id === "1" && e.target.textContent === `${i}`) {
            sliderOrder.innerText = `${i}`;
            sliderFrame.forEach(el => {
                el.src = `https://kingjungho.github.io/dothome22/refer-effect/sliderEffect/javascriptSE0${i}.html`
            })
        }
    }
}
const mouseView = e => {
    for (let i = 1; i <= mouseNumber.children.length; i++) {
        menuActive(e.target)
        if (e.target.parentNode.dataset.id === "2" && e.target.textContent === `${i}`) {
            mouseOrder.innerText = `${i}`;
            mouseFrame.forEach(el => {
                el.src = `https://kingjungho.github.io/dothome22/refer-effect/mouseEffect/javascriptME0${i}.html`
            })
        }
    }
}
const gameView = e => {
    for (let i = 1; i <= gameNumber.children.length; i++) {
        if (e.target.parentNode.dataset.id === "3" && e.target.textContent === `${i}`) {
            menuActive(e.target)
            gameOrder.innerText = `${i}`;
            gameFrame.forEach(el => {
                el.src = `https://kingjungho.github.io/dothome22/refer-effect/GameEffect/quiz/quiz0${i}.html`
            })
        }
    }
}
let currentMenuActive;
const menuActive = (item) => {
    if (item.tagName === "BUTTON") {
        if (currentMenuActive) {
            currentMenuActive.classList.remove("active")
            parallaxNumber.children[0].classList.remove("active");
        }
        item.classList.add("active");
        currentMenuActive = item;
    }
}
parallaxNumber.children[0].classList.add("active");

parallaxNumber.addEventListener("click", parallaxView)
sliderNumber.addEventListener("click", sliderView)
mouseNumber.addEventListener("click", mouseView)
gameNumber.addEventListener("click", gameView)



// scroll Trigger
const trigger = new ScrollTrigger.default({
    trigger: {
        once: false,
        offset: {
            // element: {
            //     x: 0,
            //     y: (trigger, rect, direction) => {
            //         return 0.2
            //     }
            // },
            viewport: {
                x: 0,
                y: (trigger, frame, direction) => {
                    return trigger.visible ? 0 : 0.4
                }
            }
        },
    }
});
trigger.add('[data-trigger]');



//스크롤 백그라운드 이펙트
let bgc = document.getElementById("bgc");

window.addEventListener("scroll", () => {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop || window.scrollY;

    let sectionAll = document.getElementsByTagName("section");

    for (let i = 0; i < sectionAll.length; i++) {
        let secDiv = sectionAll[i];

        let heightBefore = 0;
        if (i > 0) {
            heightBefore = sectionAll[i - 1].offsetHeight / 15;
        }

        if (scrollTop > (secDiv.offsetTop - 600) - heightBefore) {
            let color = secDiv.getAttribute("data-color");
            document.body.style.background = color;
        }
    }
});



//스크롤 이펙트

const fixedSvg = document.querySelectorAll("#header .svg img");
const fixedText = document.querySelectorAll("#header span");
const fixedLogo = document.querySelector("#header .logo a");
const fixedProject = document.querySelector("#header .project");
const fixedAbout = document.querySelector("#header .about");
const fixedContact = document.querySelector("#header .contact");
const sectionThree = document.querySelector("#section3");
const sectionFour = document.querySelector("#section4");
const sectionFive = document.querySelector("#section5");
const sectionSix = document.querySelector("#section6");

window.addEventListener("scroll", () => {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop || window.scrollY;

    if (scrollTop >= sectionThree.offsetTop - 280 && scrollTop <= sectionFour.offsetTop) {
        fixedLogo.style.color = "#000"
        fixedSvg.forEach(el => {
            el.style.filter = "brightness(0%)"
        })
        fixedText.forEach(el => {
            el.style.color = "#000"
        })
    } else if (scrollTop >= sectionFive.offsetTop - 600 && scrollTop <= sectionSix.offsetTop) {
        fixedLogo.style.color = "#000"
        fixedSvg.forEach(el => {
            el.style.filter = "brightness(0%)"
        })
        fixedText.forEach(el => {
            el.style.color = "#000"
        })
    } else {
        fixedSvg.forEach(el => {
            el.style.filter = "brightness(100%)"
        })
        fixedText.forEach(el => {
            el.style.color = "#fff"
        })
        fixedLogo.style.color = "#fff"
        fixedProject.style.color = "#fff"
        fixedAbout.style.color = "#fff"
        fixedContact.style.color = "#fff"
    }
});

//modal

function modal() {
    document.querySelector("#section8 .contactImail").addEventListener("click", function () {
        document.querySelector("#modal").classList.add("show");
        document.querySelector("#modal").classList.remove("hide");
    });
    document.querySelector(".modal-cont button").addEventListener("click", function () {
        document.querySelector("#modal").classList.add("hide");
    });
}
modal();


//code view
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('pre code').forEach((el) => {
        hljs.highlightElement(el);
    });
});


//한글자 씩 출력하기
const string = document.querySelectorAll(".frameDesc .descBox.Write span");

string.forEach(el => {
    const randomString = () => {
        const stringArr = "#HTML #CSS #JAVASCRIPT"
        const splitStringArr = stringArr.split("")

        return splitStringArr;
    }

    const resetTyping = () => {
        el.textContent = '';
        dynamic(randomString())
    }

    const dynamic = randomArr => {
        el.textContent += randomArr.shift();
        if (randomArr.length > 0) {
            setTimeout(() => {
                dynamic(randomArr)
            }, 100)
        } else {
            setTimeout(resetTyping, 3000);
        }
    }
    dynamic(randomString())

    const blink = () => {
        el.classList.toggle("active");
    }

    setInterval(blink, 500)
})


// contact us 스크립트
const project = document.querySelector("#header .project");
const projectMove = document.querySelector("#section4");
const aboutMove = document.querySelector("#section3 .sec3");
const about = document.querySelector("#header .about");
const contact = document.querySelector("#header .contact");
const contactMe = document.querySelector("#section8 .myAderess .adress p");
const contactMeMove = document.querySelector("#section8 .contactImail");

const contactClickHandler = e => {
    e.preventDefault();
    contactMeMove.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
    })
}
const contactMeClickHandler = e => {
    e.preventDefault();
    contactMeMove.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
    })
}
const projectClickHandler = e => {
    e.preventDefault();
    projectMove.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
    })
}
const aboutClickHandler = e => {
    e.preventDefault();
    aboutMove.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
    })
}

project.addEventListener("click", projectClickHandler)
about.addEventListener("click", aboutClickHandler)
contact.addEventListener("click", contactClickHandler)
contactMe.addEventListener("click", contactMeClickHandler)

// 아코디언 메뉴
let accordionBtn = document.querySelectorAll('#section9 .contactTable .tableWrap li h4');
let allTexts = document.querySelectorAll('.text');
let accIcon = document.querySelectorAll('#section9 .contactTable .tableWrap li .arrow');


accordionBtn.forEach(function (el) {
    el.addEventListener('click', toggleAccordion)
});


function toggleAccordion(el) {
    let targetText = el.currentTarget.nextElementSibling.classList;
    let targetAccIcon = el.currentTarget.children[0];
    let target = el.currentTarget;

    if (targetText.contains('show')) {
        targetText.remove('show');
        targetAccIcon.classList.remove('anime');
        target.classList.remove('accordionTitleActive');
    } else {
        accordionBtn.forEach(function (el) {
            el.classList.remove('accordionTitleActive');

            allTexts.forEach(function (el) {
                el.classList.remove('show');
            })

            accIcon.forEach(function (el) {
                el.classList.remove('anime');
            })
        })

        targetText.add('show');
        target.classList.add('accordionTitleActive');
        targetAccIcon.classList.add('anime');
    }
}