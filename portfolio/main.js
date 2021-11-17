const section = document.querySelector("#section4");

section.addEventListener('scroll', function() {
    if (document.section.scrollTop > 0) {
      let currScrollPos2 = document.section.scrollTop;
      section.style.opacity = -currScrollPos2 / 400 + 2;
    }
  });