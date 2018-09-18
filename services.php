<?php include('header.php') ?> 
<h1>Web Design</h1>
<p>Here are some samples of website elements:</p>
    <ul class="menu">
        <li><a href="animations.php">Animations</a></li>
        <li><a href="dice.php">Dice Rolls</a></li>
 <!--       <li><a href="forms.php">Forms</a></li> -->
        <li><a href="slideshows.php">Slideshows</a></li>
<!--        <li><a href="galleries.php">Photo Galleries</a></li> -->
    </ul>    
    
<!-- Date Widget -->
<div id="widget-date" class="button">
	<p id="date"></p>
<script>
var d = new Date();
document.getElementById('date').innerHTML = "Today is " + d.toDateString() + ".";
</script>
</div>
<!----------------->

<?php include('footer.php') ?>
