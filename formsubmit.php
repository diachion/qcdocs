<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $formcontent = "From: " . $name . " (" . $email . ") " . "\n" . "Message: " . $message;
  $recipient = "lydiaquon@gmail.com";
  mail($recipient, $subject, $formcontent) or die("Error!");
?>

<?php 
$pageName = "formsubmit";
include ("header.php");
?>

<!-- ==========================================
        NAVIGATION BAR 
=============================================== -->
<?php include ("navigation.php") ?>

<!-- ==========================================
        BODY CONTENT
=============================================== -->
<section class="container text-center">
  <h1>Thank you for your message!</h1>
  <h3>We will get back to you as soon as possible.</h3>
  <a class="btn btn-primary" href="index.php">Back Home <span class="fa fa-home"></a>
</section>

<!-- ==========================================
        FOOTER
=============================================== -->
<?php include ("footer.php") ?>