<?php include('header.php') ?>

<div id="modal1" class="modal">
  <div class="modal-content">
    <span class="close">&times</span>
    <h2>To see this content better, please view on a larger screen.</h2>
  </div> <!-- modal-content -->
</div> <!-- modal1 -->

<div id="animations">
<button type="button" onclick="rolling()">Make the box roll</button>
<button type="button" onclick="sliding()">Make the box slide</button>
<button type="button" onclick="stop()">Stop animations</button>
</div>

<div id="box-path">
<div id="box" class="">
Box
</div> <!-- box -->
</div> <!-- boxpath -->

<script>
//  modal
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
</script>
<?php include('footer.php') ?>

