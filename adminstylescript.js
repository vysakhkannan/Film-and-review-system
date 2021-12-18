 /*toggle header*/

 const body = document.body;
 const collapseBtn = document.querySelector(".admin-menu button");
 const collapsedClass = "collapsed";
  
 collapseBtn.addEventListener("click", function() {
   this.getAttribute("aria-expanded") == "true"
     ? this.setAttribute("aria-expanded", "false")
     : this.setAttribute("aria-expanded", "true");
   this.getAttribute("aria-label") == "collapse menu"
     ? this.setAttribute("aria-label", "expand menu")
     : this.setAttribute("aria-label", "collapse menu");
   body.classList.toggle(collapsedClass);
 });
 
  /*Show Tooltip on Admin Menu Items*/
 
 
 const body = document.body;
 const menuLinks = document.querySelectorAll(".admin-menu a");
 const collapsedClass = "collapsed";
  
 for (const link of menuLinks) {
   link.addEventListener("mouseenter", function() {
     body.classList.contains(collapsedClass) &&
     window.matchMedia("(min-width: 768px)").matches
       ? this.setAttribute("title", this.textContent)
       : this.removeAttribute("title");
   });
 }
  /*Toggle Mobile Menu*/
 
 const body = document.body;
 const toggleMobileMenu = document.querySelector(".toggle-mob-menu");
  
 toggleMobileMenu.addEventListener("click", function() {
   this.getAttribute("aria-expanded") == "true"
     ? this.setAttribute("aria-expanded", "false")
     : this.setAttribute("aria-expanded", "true");
   this.getAttribute("aria-label") == "open menu"
     ? this.setAttribute("aria-label", "close menu")
     : this.setAttribute("aria-label", "open menu");
   body.classList.toggle("mob-menu-opened");
 });
