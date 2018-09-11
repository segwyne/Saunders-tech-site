<?php include('header.php') ?>
<h1>Contact Us</h1>
<p>You can reach us at 
<script>
    document.write("<a href=\"mail" + "to:" + new Array("btechie","gmail.com").join("@") + "\">" + new Array("btechie","gmail.com").join("@") + "</" + "a>")  // This is Ben's addition to prevent email address harvesting 
</script>
or use this form:</p>
<form id="contact" method="post" action="message-sent.php">
<label for="name">Name: <span class="error">*</span></label><br />
<input type="text" name="name"></input>
<br />
<label for="email">Email: <span class="error">*</span></label><br />
<input type="text" name="email"></input>
<br />
<label for="message">Message: <span class="error">*</span></label ><br />
<textarea name="message" placeholder="Enter your message here"></textarea>
<br /><br />
<input type="submit" id="send" name="send" value="Send Message"></input>
</form>

<?php include('footer.php') ?>
