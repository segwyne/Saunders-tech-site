<?php include('header.php') ?> 

<h1>Slideshows</h1>
<p>Here are some gratuitous photos of fall in my town.</p>

<!-- First slideshow -->
<div class="container"> 
  <div class="portrait">
    <div class="my-slides fade">
      <div class="numbertext">1 / 5</div>
      <img src="slideshow/red-tree-1-tn.jpg" alt="" />
      <div class="caption">Red tree 1</div>
    </div>
    <div class="my-slides fade">
      <div class="numbertext">2 / 5</div>
      <img src="slideshow/red-tree-2-tn.jpg" alt="" />
      <div class="caption">Red tree 2</div>
    </div>
    <div class="my-slides fade">
      <div class="numbertext">3 / 5</div>
      <img src="slideshow/red-tree-3-tn.jpg" alt="" />
      <div class="caption">Red tree 3</div>
    </div>
    <div class="my-slides fade">
      <div class="numbertext">4 / 5</div>
      <img src="slideshow/red-tree-4-tn.jpg" alt="" />
      <div class="caption">Red tree 4</div>
    </div>
    <div class="my-slides fade">
      <div class="numbertext">5 / 5</div>
      <img src="slideshow/red-tree-5-tn.jpg" alt="" />
      <div class="caption">Red tree 5</div>
    </div>
    <a class="prev" onclick="plusDivs(-1, 0)">&#10094;</a>
    <a class="next" onclick="plusDivs(1, 0)">&#10095;</a>
  </div>  <!-- portrait -->
</div> <!--container-->

<!-- Second slideshow -->
<div class="container">
  <div class="landscape">
    <div class="my-slides-1 fade">
      <div class="numbertext">1 / 5</div>
      <img src="slideshow/fall-roadside-2-tn.jpg" alt="" />
      <div class="caption">Roadside</div>
    </div>
    <div class="my-slides-1 fade">
      <div class="numbertext">2 / 5</div>
      <img src="slideshow/fall-bog-3-tn.jpg" alt="" />
      <div class="caption">Bog</div>
    </div>
    <div class="my-slides-1 fade">
      <div class="numbertext">3 / 5</div>
      <img src="slideshow/fall-intersection-2-tn.jpg" alt="" />
      <div class="caption">Highway intersection</div>
    </div>
    <div class="my-slides-1 fade">
      <div class="numbertext">4 / 5</div>
      <img src="slideshow/fall-village-1-tn.jpg" alt="" />
      <div class="caption">Quaint village</div>
    </div>
    <div class="my-slides-1 fade">
      <div class="numbertext">5 / 5</div>
      <img src="slideshow/apples-3-tn.jpg" alt="" />
      <div class="caption">Apple orchard</div>
    </div>
  </div>  <!-- landscape -->
</div> <!--container-->

<!-- Third slideshow -->
<div class="container">
  <div class="landscape">
    <div class="my-slides-2">
      <div class="numbertext">1 / 5</div>
      <img src="slideshow/fall-field-2-tn.jpg" alt="" />
      <div class="caption">A field</div>
    </div>
    <div class="my-slides-2">
      <div class="numbertext">2 / 5</div>
      <img src="slideshow/fall-roadside-3-tn.jpg" alt="" />
      <div class="caption">Roadside</div>
    </div>
    <div class="my-slides-2">
      <div class="numbertext">3 / 5</div>
      <img src="slideshow/fall-field-3-tn.jpg" alt="" />
      <div class="caption">Another field</div>
    </div>
    <div class="my-slides-2">
      <div class="numbertext">4 / 5</div>
      <img src="slideshow/fall-field-4-tn.jpg" alt="" />
      <div class="caption">Lots of fields here</div>
    </div>
    <div class="my-slides-2">
      <div class="numbertext">5 / 5</div>
      <img src="slideshow/fall-intersection-1-tn.jpg" alt="" />
      <div class="caption">An intersection</div>
    </div>
    <a class="prev" onclick="plusDivs(-1, 0)">&#10094;</a>
    <a class="next" onclick="plusDivs(1, 0)">&#10095;</a>
  </div>  <!-- landscape -->
</div> <!--container-->

<!-- Fourth slideshow -->
<div class="container gallery"> 
  <div class="portrait">
    <div class="my-slides-3 fade">
      <div class="numbertext">1 / 5</div>
      <img src="slideshow/fall-village-2-tn.jpg" />
    </div>
    <div class="my-slides-3 fade">
      <div class="numbertext">2 / 5</div>
      <img src="slideshow/apples-1-tn.jpg" />
    </div>
    <div class="my-slides-3 fade">
      <div class="numbertext">3 / 5</div>
      <img src="slideshow/fall-maple-2-tn.jpg" />
    </div>
    <div class="my-slides-3 fade">
      <div class="numbertext">4 / 5</div>
      <img src="slideshow/apples-2-tn.jpg" />
    </div>
    <div class="my-slides-3 fade">
      <div class="numbertext">5 / 5</div>
      <img src="slideshow/fall-field-1-tn.jpg" />
    </div>
    <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
    <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
    
    <p id="caption"></p>
    
    <div class="flexcon myslides3">
      <img class="fade1" src="slideshow/fall-village-2-tn.jpg" onclick="currentSlide(1)" alt="Lone Tree">
      <img class="fade1" src="slideshow/apples-1-tn.jpg" onclick="currentSlide(2)" alt="Apples">
      <img class="fade1" src="slideshow/fall-maple-2-tn.jpg" onclick="currentSlide(3)" alt="Maple on the roadside">
      <img class="fade1" src="slideshow/apples-2-tn.jpg" onclick="currentSlide(4)" alt="Child picking apples">
      <img class="fade1" src="slideshow/fall-field-1-tn.jpg" onclick="currentSlide(5)" alt="Across a field">
  </div>  <!--flexcon myslides2 -->
  </div>  <!-- portrait -->
</div>  <!-- container -->
<script>
// manual 
var slideIndex = [1,1];
var slideId = ["my-slides", "my-slides-2"]
showDivs(1, 0);
showDivs(1, 1);
// automatic
var slideIndex1 = 0;
showSlides();
// gallery
var slideIndex2 = 1;
showSlides1(slideIndex2);

</script>

<?php include('footer.php') ?>
