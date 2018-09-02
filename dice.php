<?php include('header.php') ?>

<h1>RPG Character Generation</h1>
<p>This page will generate a random dice roll.  It is specifically useful for (among other things) generating character stats for table-top role-playing games, such as Dungeons and Dragons.  More features will be added in the future.</p>
<div class="half">
<p>Number of dice to roll:</p>
<input type="number" id="qty" value="3"></input>
<p>Number of sides on the die:</p>
<input type="number" id="diceSize" value="6"></input>
<br>
<button onclick="rollDice()">Roll the Dice</button>
</div>
<div class="half">
<p id="verification"></p>
<p id="ind"></p>
<p id="result"></p>
</div>


<?php include('footer.php') ?>
