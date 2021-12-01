// 소개글 마우스오버 이미지 이펙트
document.querySelectorAll(".text1 p span").forEach((element) => {
    let style = element.getAttribute("class");
    element.addEventListener("mouseover", e => {
        e.target.classList.add(style);
    });
    element.addEventListener("mouseout", () => {
        document.querySelector(".text1 p span").classList.remove(style);
    });
})



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
















































//스크롤 이펙트

const fixedSvg = document.querySelectorAll("#header .svg img");
const fixedText = document.querySelectorAll("#header span");
const fixedLogo = document.querySelector("#header .logo a");
const fixedProject = document.querySelector("#header .project");
const fixedAbout = document.querySelector("#header .about");
const fixedContact = document.querySelector("#header .contact");
const sectionOne = document.querySelector("#section1");
const sectionTwo = document.querySelector("#section2");
const sectionThree = document.querySelector("#section3");
const sectionFour = document.querySelector("#section4");
const sectionSix = document.querySelector("#section6");
const sectionSeven = document.querySelector("#section7");

window.addEventListener("scroll", () => {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop || window.scrollY;

    if (scrollTop >= sectionThree.offsetTop && scrollTop <= sectionFour.offsetTop) {
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