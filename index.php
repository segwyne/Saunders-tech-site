<?php include('header.php') ?>

<div>
<h1>Welcome to Saunders Technology.</h1>

</div>
<div>
<h2>Services we offer include:</h2>
<ul>
    <li>Website design</li>
    <li>Custom computer building</li> 
</ul>
</div>
<div id="widget-date" class="button">
<p id="date"></p>
</div>
<script>
var d = new Date();
document.getElementById('date').innerHTML = "Today is " + d.toDateString() + ".";
</script>

<?php include('footer.php') ?>
