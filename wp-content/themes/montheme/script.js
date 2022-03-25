

  window.onscroll = function(){
    if (document.documentElement.scrollTop > 350) {
       document.getElementById('menuNavigation').style.background = "linear-gradient(266deg, rgba(0,90,211,1) 0%, rgba(28,105,207,1) 50%, rgba(159,177,188,1) 64%, rgba(255,255,255,1) 77%)";
       document.getElementById('nav-link').style.fontSize = "1.5rem";
        document.getElementById('menuNavigation').style.padding = "20px 15px";
        document.getElementById('menuNavigation').style.top = "0";
        document.getElementById('logo-blue').style.width = "10rem";
     
    
       
    } else {
        document.getElementById('menuNavigation').style.background = "rgba(159, 177, 188, 0.7)";
        document.getElementById('nav-link').style.fontSize = "1.8rem";
        document.getElementById('menuNavigation').style.padding = "150px 10px";
        document.getElementById('menuNavigation').style.top = "25vh";
        document.getElementById('logo-blue').style.width = "185%";
     
}};



/*

let navbar = document.getElementById("menuNavigation");
     let navOffset = navbar.offsetTop;
     window.addEventListener("scroll", () => {
         (window.scrollY > 350) ? 
             navbar.classList.add("navigation-fixed") : 
             navbar.classList.remove("navigation-fixed")
             console.log(navOffset);
             console.log(window.scrollY );
     });
*/



const ratio = .3;

const options = {
  root: null,
  rootMargin: '0px',
  threshold: ratio
}
const handleIntersect = function(entries, observer){
  entries.forEach(function (entry){
    console.log(entry.intersectionRatio);
    if (entry.intersectionRatio > ratio) {
      entry.target.classList.add('reveal-visible')
      console.log(entries);
      observer.unobserve(entry.target)
    }
  });
  console.log('handleIntersect');
}

const observer = new IntersectionObserver(handleIntersect, options)
observer.observe(document.querySelectorAll('[class*="reveal-"]').forEach(function(r){
  observer.observe(r)
}));
