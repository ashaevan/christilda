<?php
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $phone = trim(strip_tags($_POST['phone']));
       $message = htmlentities($_POST['message']);
       $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
	  if(!preg_match($email_exp,$email)) {
	    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	  }
       // set here
       $subject = "Enquiry from website - christilda.com";
       $to = 'asha.evangeline@railsdata.com';

       $body = <<<HTML
$message

HTML;

       $headers = "From: $email\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
       header('Location: home.html');
?>
echo "Thank you for contacting us " . $first_name . ", We will be in touch with you very soon!";
<p>Mail sent!</p>
