<?php
  define("TITLE", "Contact Us | Franklin's Fine Dining");

  include('./assets/includes/header.php');

?>

  <div id="contact">
    <hr>

    <h1>Get in touch with us!</h1>

    <?php

      // Check for header injection

      function has_header_injections($string) {
        return preg_match( "/[\r\n]/", $string );
      }

      if (isset ($_POST['contact_submit'])) {

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = $_POST['message'];

        // Check to see if $name or $email have header injectsions
        if (has_header_injections($name) || has_header_injections($email)) {
          die(); // If true, kill the script
        }

        if ( !$name || !$email || !$message) {
          echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
          exit;
        }

        // Add teh recipient email to a variable
        $to = "lapinell@gmail.com";

        // Create a subject
        $subject = "$name sent you a message via your contact form";

        // Construct message
        $msg = "Name: $name\r\n";
        $msg .= "Email: $email\r\n";
        $msg .= "Message:\r\n$msg";

        // If the subsribe checkbox was checked...

        ifisset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {

          // Add a new line to the $msg
          $msg .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
        }

        $msg = wordwrap($msg, 72);

        // Set mail headers to a variable
      }

    ?>

    <form method="post" action="" id="contact-form">

      <label for="name">Name *</label>
      <input type="text" id="name" name="name">
      
      <label for="email">Email *</label>
      <input type="text" id="email" name="email">

      <label for="message">Message *</label>
      <textarea id="message" name="message"></textarea>

      <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
      <label for="subscribe">Subscribe to newsletter</label>

      <input type="submit" class="button next" name="contact_submit" value="Send Message">

    </form>

  </div><!-- contact -->

<?php

  include('./assets/includes/footer.php');

?>