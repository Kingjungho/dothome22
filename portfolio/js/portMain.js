//스크롤 백그라운드 이펙트
let bgc = document.getElementById("bgc");

document.onscroll = function() {

		scrollTop = document.documentElement.scrollTop;
        bgc.innerHTML = scrollTop;
    
    allDivs = document.querySelector('#section4');
    console.log(allDivs)

    for( i=0; i< allDivs.length; i++ )
    {
    		curDiv = allDivs[i];
        
        
        // The code below makes the background color change when the 						scroll top passes the 2/3 of the previous div.
        
        heightBefore = 0;    
        if (i > 0){
        		heightBefore = allDivs[i-1].offsetHeight / 10;
        }
        
        if (scrollTop > curDiv.offsetTop - heightBefore){
        		color = curDiv.getAttribute("data-color");
          	document.body.style.background = color;
        }
                
    }
};
    
    
    
    
    
    
    
    
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
        for (let i = 1; i < 9; i++) {
            if (e.target.parentNode.dataset.id === "0" && e.target.textContent === `${i}`) {
                order.forEach(el => {
                    el.innerHTML = `${i}`;
                    frame.forEach(el => {
                        el.src = `https://kingjungho.github.io/dothome22/refer-effect/ParallaxEffect/javascriptPE0${i}.html`
                    })
                })
            }
        }
    }
    //     for (let i = 1; i < 9; i++) {
    //         if (e.target.parentNode.dataset.id === "1" && e.target.textContent === `${i}`) {
    //             order.forEach(el => {
    //                 el.innerHTML = `${i}`;
    //                 frame.forEach(el => {
    //                     el.src = `https://kingjungho.github.io/dothome22/refer-effect/sliderEffect/javascriptSE0${i}.html`
    //                 })
    //             })
    //         }
    //     }
    //     for (let i = 1; i < 9; i++) {
    //         if (e.target.parentNode.dataset.id === "2" && e.target.textContent === `${i}`) {
    //             order.forEach(el => {
    //                 el.innerHTML = `${i}`;
    //                 frame.forEach(el => {
    //                     el.src = `https://kingjungho.github.io/dothome22/refer-effect/mouseEffect/javascriptME0${i}.html`
    //                 })
    //             })
    //         }
    //     }
    //     for (let i = 1; i < 9; i++) {
    //         if (e.target.parentNode.dataset.id === "3" && e.target.textContent === `${i}`) {
    //             order.forEach(el => {
    //                 el.innerHTML = `${i}`;
    //                 frame.forEach(el => {
    //                     el.src = `https://kingjungho.github.io/dothome22/refer-effect/GameEffect/quiz/cardGame.html`
    //                 })
    //             })
    //         }
    //     }
    // }

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




    //email 보내기
    const emailBtn = document.querySelector('.contactImail');
    




    const setClipboard = (value) => {
        let tempInput = document.createElement('input');
        tempInput.style = "position : absolute; left: -1000px; top: -1000px";
        tempInput.value = value;
        document.body.appendChild(emailBtn);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(emailBtn)
    }


    // 아코디언 메뉴
    let accordionBtn = document.querySelectorAll('#section10 .contactTable .tableWrap li h4');
    let allTexts = document.querySelectorAll('.text');
    let accIcon = document.querySelectorAll('#section10 .contactTable .tableWrap li .arrow');


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
                        return trigger.visible ? 0 : 0.5
                    }
                }
            },
        }
    });
    trigger.add('[data-trigger]');



    //스크롤 이펙트

    const aside = document.querySelectorAll("#section #aside a div");
    const asideImg = document.querySelectorAll("#section #aside img");
    const sectionOne = document.querySelector("#section1");
    const sectionFour = document.querySelector("#section4");
    const sectionFive = document.querySelector("#section5");
    const sectionSix = document.querySelector("#section6");
    const sectionSeven = document.querySelector("#section7");

    window.addEventListener("scroll", () => {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop || window.scrollY;

        if (scrollTop >= sectionFour.offsetTop && scrollTop <= sectionFive.offsetTop) {
            aside.forEach(el => {
                el.style.color = "#000"
            })
            asideImg.forEach(el => {
                el.style.filter = "brightness(0%)"
            })
        } else if (scrollTop >= sectionSix.offsetTop && scrollTop <= sectionSeven.offsetTop) {
            aside.forEach(el => {
                el.style.color = "#000"
            })
            asideImg.forEach(el => {
                el.style.filter = "brightness(0%)"
            })
        } else {
            aside.forEach(el => {
                el.style.color = "#fff"
            })
            asideImg.forEach(el => {
                el.style.filter = "brightness(100%)"
            })
        }


    });