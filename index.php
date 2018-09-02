<?php include('header.php') ?>

<div>
<p>We have been busy building other sites and haven't had much time to build our own here.</p>
<p>You can reach us at 
<script>
    document.write("<a href=\"mail" + "to:" + new Array("btechie","gmail.com").join("@") + "\">" + new Array("btechie","gmail.com").join("@") + "</" + "a>")  // This is Ben's addition to prevent email address harvesting 
</script>
</p>
</div>
<div>
<h2>Services we offer include:</h2>
<ul>
    <li>Small network security</li>
    <li>Website design</li>
    <li>Small network administration</li>
    <li>Custom computer building</li> 
</ul>
</div>
<div class="bottom-center">
<p id="date"></p>
</div>
<script>
var d = new Date();
document.getElementById('date').innerHTML = "Today is " + d.toDateString() + ".";
</script>

<?php include('footer.php') ?>
