<?php 
$title = 'Contact Castle Home Checks';
include_once('partials/header.php'); 
?>

<div id="contact_form">

<h1 class="header">Contact Castle Home Checks, Inc.</h1>

<form action="thank_you.php" method="post" class="contact_form" id="contactform">
<p>
  Name: <font color="red">*</font>
<div class="required_form_input">
  <input name="name" type="text" class="required"  id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" />
</div>
</p>
<p>
  Postal Code:
<input name="zip" type="text" id="zip" size="5" value="<?php if (isset($_POST['zip'])) echo $_POST['zip']; ?>"/>
</p>

<p>
  Phone:
  <input name="phone" type="text" id="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>"/>
</p>
<p>
 Email: <font color="red">*</font>
<div class="required_form_input">  
<input name="email" type="text" class="required email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"/>
</div>
</p>
<p>Briefly describe what service(s) you're interested in: <br /><textarea name="message" cols="30" rows="7" id="message" value="<?php if(isset($_POST['message'])) echo $_POST['message']; ?>"></textarea></p>
<p><input name="submit" type="submit" value="Submit" /></p>
<p><input name="submitted" type="hidden" value="TRUE"  /></p>
<br />
</form>
</div>

<div id="national_home">
	<h2 class="red">About the National Home Watch Association</h2>
	<p><strong>CASTLE HOME CHECKS, INC. is pleased to be an accredited member of the National Home Watch Association.</strong></p>
	
	<p><a href="http://www.nationalhomewatchassociation.org" target="_blank"><img src="http://www.nationalhomewatchassociation.org/logos/nhwa-member-small.png" border="0" class="img_float_left"></a></p>

<p>The main purpose of the NHWA is to bring potential clients together with professional, accredited home watch businesses who abide by the highest standards and ethics set forth by the NHWA as follows:</p>

<ul>
<li>always look out for the client's best interest</li>
<li>always protect the best interests of the Home Watch industry</li>
<li>always maintain proper insurance and bonding</li>
<li>always maintain current business licenses</li>
<li>always look to improve on industry standards</li>
<li>always be diligent when checking the references of anyone or any company that you agree to do business with</li>
<li>always think twice before speaking about competitors</li>
<li>always use honesty and integrity in your business dealings</li>
</ul>

<p>Please click on the link to go to the National Home Watch Association main page for further information and discover how they are setting the gold standard for the home watch industry:&nbsp;&nbsp;<a href="#">National Home Watch Association</a>
</p>
</div>

<?php include_once('partials/footer.php'); ?>