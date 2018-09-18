<?php include('header.php') ?>
<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Contact Us</h1>
<p>You can reach us at 
<script>
    document.write("<a href=\"mail" + "to:" + new Array("btechie","gmail.com").join("@") + "\">" + new Array("btechie","gmail.com").join("@") + "</" + "a>")  // This is Ben's addition to prevent email address harvesting 
</script>
or use this form:</p>
<form id="contact" method="post" action="message-sent.php">
<label for="name">Name: <span class="error">*</span></label><br />
<input type="text" name="name" required="required">
<br />
<label for="email">Email: <span class="error">*</span></label><br />
<input type="email" name="email" required="required">
<br />
<label for="message">Message: <span class="error">*</span></label ><br />
<textarea name="message" placeholder="Enter your message here" required="required"></textarea>
<br /><br />
<input type="submit" id="send" name="send" value="Send Message" class="button">
</form>

<?php include('footer.php') ?>
