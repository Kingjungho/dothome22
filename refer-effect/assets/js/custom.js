
    document.querySelector(".info button").addEventListener("click", function(){
       document.querySelector("#modal").classList.add("show"); 
       document.querySelector("#modal").classList.remove("hide"); 
    });

    document.querySelector(".modal-cont button").addEventListener("click", function(){
       document.querySelector("#modal").classList.add("hide"); 
    });
    

      document.addEventListener('DOMContentLoaded', (event) => {
      document.querySelectorAll('pre code').forEach((el) => {
            hljs.highlightElement(el);
      });
   });


   //


   const tabBtn1 = document.querySelectorAll(".code-view .view-title li");
   const tabCont1 = document.querySelectorAll(".view-cont > div");

        //1. 버튼을 클릭하면 클릭한 버튼한테 active 추가

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