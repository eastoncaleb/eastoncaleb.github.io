<?php include_once('partials/header.php'); ?>

<div id="wide-content-div">


<div id="contact_form">


<?php
if (isset($_POST['submitted'])) {

$errors = array();

// Validate the name 
if (!empty($_POST['name'])) {
$name = stripslashes ($_POST['name']);
}else{
$errors[] = 'You didn\'t enter your name.';
}

//Validate the email
if (!empty($_POST['email'])) {
$email = stripslashes ($_POST['email']);
}else{
$errors[] = 'You didn\'t enter your email.';
}

if (!empty($_POST['phone'])) {
$phone = stripslashes ($_POST['phone']);
}

if (!empty($_POST['message'])) {
$message = stripslashes ($_POST['message']);
}

if ($_POST['spam_protect'] != 7) {
	$errors[] = 'You didn\'t correctly answer the anti-spam question.';
}

if (empty($errors)) {
echo "<h2>Thank you, $name, for contacting us. We will send you a reply as soon as possible.\n</h2>
";

if (!empty($_POST['send_info'])) {
$send_info = implode (', ', $_POST['send_info']);
}

$to      = 'probatecourt@putnamprobate.com';
$subject = 'PutnamProbate.com Website Information Request';
$headers .= "From: \"" . $name . "\" <" . $email . ">\r\n";
$headers .= "Reply-To: \"". $name . "\" <". $email .">\r\n";
$content = 
"\nName: $name" 
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
    echo '</p><p><font color="blue"><br />Please go back and fill out the form again.</font></p><p><br /><br /></p>';
}
}

?>

</div>    
</div>

<?php include_once('partials/aside.html'); ?>


<?php include_once('partials/footer.php'); ?>