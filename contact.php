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

<section class="container text-center">
  <div class="col-md-4">
    <h3>twitter</h3>
    <a class="btn btn-contact" href="https://twitter.com/qcdocs" target="new"><span class="fa fa-twitter"></span> @qcdocs</a>
  </div>
  <div class="col-md-4">
    <h3>email</h3>
    <a class="btn btn-contact" href="mailto:sales@qcdocs.com" target="new"><span class="fa fa-envelope"></span> sales@qcdocs.com</a>
  </div>
  <div class="col-md-4">
    <h3>telephone</h3>
    <a class="btn btn-contact" href="tel:+18772418444" target="new"><span class="fa fa-phone"></span> 1-877-241-8444</a>
  </div>
</section>

<!-- divivder --> <div class="container divider"></div>

<section class="container">

  <form id="form" parsley-validate method="post" action="formsubmit.php">
    <div class="form-wrap">
      <label for="name">Name</label>
        <input id="name" type="text" name="name" placeholder="ex. john doe" required/>
    </div>

    <div class="form-wrap">
      <label for="email">Email Address</label>
        <input id="email" type="email" name="email" placeholder="ex. john.doe@website.com" required/>
    </div>

    <div class="form-wrap">
      <label for="subject">Subject</label>
        <input id="subject" type="text" name="subject" placeholder="ex. inquiry about services" required/>
    </div>

    <div class="form-wrap">
      <label for="message">Message</label>
        <textarea id="message" rows="5" name="message" placeholder="ex. i would like to request more information about your services" required></textarea>
    </div>

    <button id="submit" class="btn btn-primary" type="submit">Send Message <span class="fa fa-paper-plane"></span></button>
  </form>

</section>

<!-- ==========================================
        FOOTER
=============================================== -->
<?php include ("footer.php") ?>