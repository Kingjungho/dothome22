//mozilla/5.0 (windows nt 6.1; win64; x64) applewebkit/537.36 (khtml, like gecko) chrome/88.0.4324.150 safari/537.36 edg/88.0.705.63
//mozilla/5.0 (windows nt 6.1; win64; x64) applewebkit/537.36 (khtml, like gecko) chrome/88.0.4324.150 safari/537.36
//mozilla/5.0 (macintosh; intel mac os x 11_2_1) applewebkit/537.36 (khtml, like gecko) chrome/88.0.4324.150 safari/537.36
//mozilla/5.0 (macintosh; intel mac os x 10_16_0) applewebkit/537.36 (khtml, like gecko) chrome/83.0.4103.106 whale/2.8.108.15 safari/537.36
//mozilla/5.0 (macintosh; intel mac os x 10_15_6) applewebkit/605.1.15 (khtml, like gecko) version/14.0.3 safari/605.1.15

//mozilla/5.0 (windows nt 10.0; wow64; trident/7.0; .net4.0c; .net4.0e; .net clr 2.0.50727; .net clr 3.0.30729; .net clr 3.5.30729; zoom 3.6.0; rv:11.0) like gecko
//mozilla/5.0 (compatible; msie 10.0; windows nt 6.1; wow64; trident/7.0; slcc2; .net clr 2.0.50727; .net clr 3.5.30729; .net clr 3.0.30729; media center pc 6.0; .net4.0c; infopath.3; .net4.0e)
//mozilla/5.0 (compatible; msie 9.0; windows nt 6.1; wow64; trident/7.0; slcc2; .net clr 2.0.50727; .net clr 3.5.30729; .net clr 3.0.30729; media center pc 6.0; .net4.0c; infopath.3; .net4.0e)
//mozilla/4.0 (compatible; msie 8.0; windows nt 6.1; wow64; trident/7.0; slcc2; .net clr 2.0.50727; .net clr 3.5.30729; .net clr 3.0.30729; media center pc 6.0; .net4.0c; infopath.3; .net4.0e)
//mozilla/4.0 (compatible; msie 7.0; windows nt 6.1; wow64; trident/7.0; slcc2; .net clr 2.0.50727; .net clr 3.5.30729; .net clr 3.0.30729; media center pc 6.0; .net4.0c; infopath.3; .net4.0e)

//mozilla/5.0 (iphone; cpu iphone os 14_4 like mac os x) applewebkit/605.1.15 (khtml, like gecko) version/14.0.3 mobile/15e148 safari/604.1
//Mozilla/5.0 (Linux; Android 9; SM-G955N Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/75.0.3770.89 Mobile Safari/537.36
//Mozilla/5.0 (Ipad; CPU OS 13_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/79.0.3945.73 Mobile/15E148 Safari/ 604.1
//Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15) AppleWebKit/605.1.15 (KHTML, like Gecko) FxiOS/24.1 Safari/605.1.15
//Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_4) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Safari/605.1.15
   
//userAegent ????????? ??????
        function agentCheck(){
        const agent = navigator.userAgent.toLowerCase();

        const browserList = {
        mac: agent.match(/macintosh/i),
        window: agent.match(/windows/i),
        iphone: agent.match(/iphone/i),
        android: agent.match(/android/i),
        ipad: agent.match(/ipad/i),
        ie7: agent.match(/msie 7.0/i),
        ie8: agent.match(/msie 8.0/i),
        ie9: agent.match(/msie 9.0/i),
        ie10: agent.match(/msie 10.0/i),
        ie11: agent.match(/rv:11.0/i),
        edge: agent.match(/edg/i),
        chrome: agent.match(/chrome/i),
        safari: agent.match(/safari/i),
        firefox: agent.match(/firefox/i),
        opera: agent.match(/opera/i),
        whale: agent.match(/whale/i),
        }

        for (prop in browserList) {
            
            if (browserList[prop]){
                //console.log(prop)
                document.querySelector("body").classList.add(prop)
                // document.getElementsByTagName("body") //?????? ??????
            }
        }
        console.log(browserList)
    }

   
   //modal
   function modal() {
    document.querySelector(".info button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("show"); 
        document.querySelector("#modal").classList.remove("hide"); 
    });
        document.querySelector(".modal-cont button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("hide"); 
    });
   }
   modal();
   

    //code view
    document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((el) => {
            hljs.highlightElement(el);
        });
    });


   //


    const tabBtn1 = document.querySelectorAll(".code-view .view-title li");
    const tabCont1 = document.querySelectorAll(".view-cont > div");

        //1. ????????? ???????????? ????????? ???????????? active ??????

        tabBtn1.forEach((element, index) => {
            element.addEventListener("click", function () {

                tabBtn1.forEach(el => {
                    el.classList.remove("active")
                });
                element.classList.add("active")
               
                tabCont1.forEach(el => {
                    el.style.display = "none";
                })
                    tabCont1[index].style.display = "block";
            })
        });

     
