<?php include('header.php') ?>

<!-- Third slideshow -->
<br>

<div class="container portrait gallery"> 
  <div class="my-slides-2 fade">
    <div class="numbertext">1 / 5</div>
    <img src="slideshow/fall-village-2-tn.jpg" />
  </div>
  <div class="my-slides-2 fade">
    <div class="numbertext">2 / 5</div>
    <img src="slideshow/apples-1-tn.jpg" />
  </div>
  <div class="my-slides-2 fade">
    <div class="numbertext">3 / 5</div>
    <img src="slideshow/fall-maple-2-tn.jpg" />
  </div>
  <div class="my-slides-2 fade">
    <div class="numbertext">4 / 5</div>
    <img src="slideshow/apples-2-tn.jpg" />
  </div>
  <div class="my-slides-2 fade">
    <div class="numbertext">5 / 5</div>
    <img src="slideshow/fall-field-1-tn.jpg" />
  </div>
  <a class="prev" onclick="plusSlides(-1, 2)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 2)">&#10095;</a>
  
  <p id="caption"></p>
  
  <div class="flexcon myslides2">
    <img class="fade1" src="slideshow/fall-village-2-tn.jpg" onclick="currentSlide(1)" alt="Lone Tree">
    <img class="fade1" src="slideshow/apples-1-tn.jpg" onclick="currentSlide(2)" alt="Apples">
    <img class="fade1" src="slideshow/fall-maple-2-tn.jpg" onclick="currentSlide(3)" alt="Maple on the roadside">
    <img class="fade1" src="slideshow/apples-2-tn.jpg" onclick="currentSlide(4)" alt="Child picking apples">
    <img class="fade1" src="slideshow/fall-field-1-tn.jpg" onclick="currentSlide(5)" alt="Across a field">
  </div>  <!--flexcon myslides2 -->
</div>  <!-- container portrait -->

<div class="spacer"></div>

<script>
var slideIndex2 = 1;
showSlides1(slideIndex2);

</script>

<?php include('footer.php') ?>
