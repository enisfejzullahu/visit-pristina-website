// JS File for the slideshow images
window.addEventListener("DOMContentLoaded", function () {
  var containers = document.querySelectorAll(".slideshow-container");

  containers.forEach(function (container) {
    var slides = container.querySelectorAll(".slide");
    var radios = container.querySelectorAll(".slide-radio");

    // Add event listener to each radio button within the container
    radios.forEach(function (radio, index) {
      radio.addEventListener("change", function () {
        // Hide all slides within the same container
        slides.forEach(function (slide) {
          slide.style.opacity = 0;
        });
        // Show the selected slide with fade in effect
        slides[index].style.opacity = 1;
      });
    });
  });
});
