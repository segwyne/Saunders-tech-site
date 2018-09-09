//    Modals
var modal = document.getElementById('modal1');
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//    Dice rolling page 
function rollDice() {
  var size = document.getElementById("diceSize").value;
  var qty = document.getElementById('qty').value;
  var text = "";
  var total = 0;
  var ind = 0;
  for (i=0; i<qty; i++) {
    var result = Math.floor(Math.random() * size) + 1;
    ind=i+1;
    text += "Roll "+ind+" is "+result+"<br>";
    total += result;
    }
  document.getElementById('ind').innerHTML = text;
  document.getElementById('verification').innerHTML = "Rolling "+qty+" d"+size;
  document.getElementById("result").innerHTML = "The total is "+total;
  }

//    Animations
function rolling() {
  document.getElementById('box').className = 'roll';
  }

function sliding() {
  document.getElementById('box').className = 'box';
  }

function stop() {
  document.getElementById('box').className = "";
  }

//   Slideshows
    //    Manual
function plusDivs(n, no) {
  showDivs(slideIndex[no] += n, no);
  }

function showDivs(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
    }
  x[slideIndex[no]-1].style.display = "block";  
  }
    //    Automatic
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("my-slides-1");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex1++;
  if (slideIndex1 > slides.length) {slideIndex1 = 1}
  slides[slideIndex1-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}

//    Galleries

// Next/previous controls
function plusSlides(n) {
  showSlides1(slideIndex2 += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides1(slideIndex2 = n);
}

function showSlides1(n) {
  var i;
  var slides = document.getElementsByClassName("my-slides-3");
  var dots = document.getElementsByClassName("fade1");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex2 = 1}
  if (n < 1) {slideIndex2 = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex2-1].style.display = "block";
  dots[slideIndex2-1].className += " active";
  captionText.innerHTML = dots[slideIndex2-1].alt;
} 

