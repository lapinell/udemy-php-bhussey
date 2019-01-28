<?php
  define("TITLE", "Contact Us | Franklin's Fine Dining");

  include('./assets/includes/header.php');

?>

  <div id="contact">
    <hr>

    <h1>Get in touch with us!</h1>

    <form method="post" action="" id="contact-form">

      <label for="name">Name</label>
      <input type="text" id="name" name="name">
      
      <label for="email">Email</label>
      <input type="text" id="email" name="email">

      <label for="message">Email</label>
      <textarea id="message" name="message"></textarea>

      <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
      <label for="subscribe">Subscribe to newsletter</label>

      <input type="submit" class="button next" name="contact_submit" value="Send Message">

    </form>

  </div><!-- contact -->

<?php

  include('./assets/includes/footer.php');

?>