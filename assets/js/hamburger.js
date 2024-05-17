// Hamburger menu for navigatoin
document.addEventListener("DOMContentLoaded", function () {
  var menuToggle = document.getElementById("menu-toggle");
  var nav = document.querySelector("nav");

  menuToggle.addEventListener("click", function () {
    nav.classList.toggle("show");
  });
});
