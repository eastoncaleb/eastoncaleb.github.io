<?php
include_once('partials/header.php');
?>

<div id="contact_form">

<h1>Contact Us</h1>

<?php
if (isset($_POST['submitted'])) {

$errors = array();

// Validate the name 
if (!empty($_POST['name'])) {
$name = stripslashes ($_POST['name']);
}else{
$errors[] = 'You didn\'t enter your name.';
}

// Optional Phone Validation - Uncomment if needed
// if (!empty($_POST['phone'])) {
// $phone = stripslashes ($_POST['phone']);
// } else {
// $errors[]= 'You didn\'t enter your phone number.';
// }

//Validate the email
if (!empty($_POST['email'])) {
$email = stripslashes ($_POST['email']);
}else{
$errors[] = 'You didn\'t enter your email.';
}

if (!empty($_POST['zip'])) {
$zip = stripslashes ($_POST['zip']);
}

if (!empty($_POST['phone'])) {
$phone = stripslashes ($_POST['phone']);
}

if (!empty($_POST['message'])) {
$message = stripslashes ($_POST['message']);
}

if (empty($errors)) {
echo "<h2>Thank you, $name, for your submission. We will contact you as soon as possible.\n</h2>
";

if (!empty($_POST['send_info'])) {
$send_info = implode (', ', $_POST['send_info']);
}

$to      = 'info@castlehomechecks.com';
$subject = 'Castle Home Checks Website Information Request';
$headers .= "From: \"" . $name . "\" <" . $email . ">\r\n";
$headers .= "Reply-To: \"". $name . "\" <". $email .">\r\n";
$content = 
"\nName: $name" 
   . "\r\n" . 
   "\nZip: $zip"
    . "\r\n" . 
    "\nPhone: $phone"
     . "\r\n" . 
     "\nEmail: $email"
      . "\r\n" . 
      "\nInterested In: $message"; 

mail($to,$subject,$content,$headers);

} else {
echo '<h1 class="error">Error!</h1><p><font color="red">The following error(s) occurred:</font><br /><br />';
foreach ($errors as $msg) {
	echo " - $msg<br />\n";
	}
    echo '</p><p><font color="blue"><br />Please fill out the form again below.</font></p><p><br /><br /></p>';
}
}

?>

</div>

<? include_once('partials/footer.php'); ?>