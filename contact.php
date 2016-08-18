<?php 
$pageName = "contact";
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
  <h1>Contact Us</h1>
</section>

<section class="container">

  <form>
    <label for="name">Name</label>
      <input id="name" type="text" name="name" placeholder="ex. john doe" required/>
    <label for="email">Email Address</label>
      <input id="email" type="text" name="email" placeholder="ex. john.doe@website.com" required/>
    <label for="subject">Subject</label>
      <input id="subject" type="text" name="subject" placeholder="ex. inquiry about services" required/>
    <label for="message">Message</label>
      <textarea id="message" rows="5" name="message" placeholder="ex. i would like to request more information about your services" required></textarea>
    <button id="submit" class="btn btn-primary" type="submit">Send Message <span class="fa fa-paper-plane"></span></button>
  </form>

</section>

<!-- ==========================================
        FOOTER
=============================================== -->
<?php include ("footer.php") ?>