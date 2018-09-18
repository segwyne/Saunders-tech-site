<?php
if (isset($_POST['send'])) {
  $to = 'judy@saunderstechnology.com';
  $subject = 'Message from Saunders Tech';
  $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
  $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
  $message .= 'Message: ' . $_POST['message'];
  $headers = "From: webmaster@saunderstechnology.com\r\n";
  $headers .= 'Content-Type: text/plain; charset=utf-8';
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  if ($email) {
    $headers .= "\r\nReply-To: $email";}
  $success = mail($to, $subject, $message, $headers);
// Send an auto response to user
  $toa = $_POST['email'];
  $subjecta = 'Your message has been received';
  $messagea = 'Thank you for contacting Saunders Technology.  I will get back to you as soon as I can.  This email is automatically generated from a non-monitored mailbox, but I wanted to make sure you knew your message was sent successfully.';
  $headersa = "From: webmaster@saunderstechnology.com\r\n";
  $heasersa .= 'Content-Type: text/plain; charset=utf-8';
  $success = mail($toa, $subjecta, $messagea, $headersa);
}

include('header.php');
 
if (isset($success) && $success) { ?>

<h1>Thank you</h1>
<p>Your message has been sent.  Please check your inbox for a confirmation email.  If you do not receive one, you may have entered your email address incorrectly.</p>
<?php } else { ?>
<h1>Oops!</h1>
<p>There was a problem sending your message.  You may go back and try again.</p>
<?php }

include('footer.php') ?>
