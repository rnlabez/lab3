<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="css/aboutme.css">
  <title> About Me </title>
</head>

  <body>
    <div class="topnav">
  <a href="home">Home</a>
  <a href="about">About Me</a>
  <a href="#References">References</a>
  <a href="form_validation.php" class="split">WIP Button</a>
    </div>

   <!-- Container for the image gallery -->
<div class="container">

<!-- Full-width images with number text -->
<div class="mySlides">
  <div class="numbertext">1 / 6</div>
    <img src="img1.jpg" onclick="currentSlide(1)" >
</div>

<div class="mySlides">
  <div class="numbertext">2 / 6</div>
    <img src="img2.jpg">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 6</div>
    <img src="img4.jpg">
</div>

<div class="mySlides">
  <div class="numbertext">4 / 6</div>
    <img src="img5.jpg">
</div>

<div class="mySlides">
  <div class="numbertext">5 / 6</div>
    <img src="img6.jpg">
</div>

<div class="mySlides">
  <div class="numbertext">6 / 6</div>
    <img src="img7.jpg">
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<!-- Image text -->
<div class="caption-container">
  <p id="caption"></p>

<!-- Thumbnail images -->
<div class="row">
    <div class="column">
      <img class="demo cursor"  onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor"  onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor"  onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor"  onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor"  onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>  
</div>

</div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    </body>
    </html>