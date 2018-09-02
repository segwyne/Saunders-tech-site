
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

function rolling() {
  document.getElementById('box').className = 'roll';
  }

function sliding() {
  document.getElementById('box').className = 'box';
  }

function stop() {
  document.getElementById('box').className = "";
  }


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

