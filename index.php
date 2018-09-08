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
