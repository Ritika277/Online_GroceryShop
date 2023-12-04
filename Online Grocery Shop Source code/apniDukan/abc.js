var slideIndex = 0;
showSlide(slideIndex);

function changeSlide(n) {
  showSlide(slideIndex += n);
}

function showSlide(n) {
  var slides = document.getElementsByClassName("slide");
  
  // Wrap around to the first slide if reached the end
  if (n >= slides.length) {
    slideIndex = 0;
  } else if (n < 0) {
    slideIndex = slides.length - 1;
  }
  
  // Hide all slides
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  // Show the current slide
  slides[slideIndex].style.display = "block";
}