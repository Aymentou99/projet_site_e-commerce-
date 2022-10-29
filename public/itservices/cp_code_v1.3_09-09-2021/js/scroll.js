const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll(" .navmenuk ul li a");
window.addEventListener("scroll", () => {
  let current = "";
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    
    if (scrollY >=  sectionTop - sectionHeight / 3) {

      current = section.getAttribute("data");
    }
  });

  navLi.forEach((li) => {


    li.classList.remove("active");

    console.log("li" +current)
    if (li.classList.contains(current)) {
      li.classList.add("active");
        
    }
  });
});