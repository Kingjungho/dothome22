
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



  //Code tab menu

  const tabBtn1 = document.querySelectorAll(".code-view .view-title li a");
  const tabCont1 = document.querySelectorAll(".language-html .hljs ");

  tabBtn1.forEach((element) => {
   element.addEventListener("click", function(){
       
       tabBtn1.forEach(el => {
           el.classList.remove("active")
       });
       element.classList.add("active")

       tabCont1.forEach( el => {
           el.style.display = "none";
       })
       tabCont1[index].style.display ="block";
   })
});