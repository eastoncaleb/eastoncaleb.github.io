<?php include_once('partials/header.php'); ?>

<div id="wide-content-div">

<h2>Please fill out the form below</h2>


<div id="contact_form">

<form action="thank_you.php" method="post" class="contact_form" id="contactform">
<p>
  Name: <font color="red">*</font>
<div class="required_form_input">
  <input name="name" type="text" class="required"  id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" />
</div>
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

<p>What is 3 + 4? (spam protection) <font color="red">*</font> 
<div class="required_form_input">
<input name="spam_protect" type="text" class="required" size="10" id="spam_protect" />
</div>
</p>

<p><input name="submit" type="submit" value="Submit" /></p>
<p><input name="submitted" type="hidden" value="TRUE"  /></p>
<br />
</form>
</div>
    
</div>

<?php include_once('partials/aside.html'); ?>


<?php include_once('partials/footer.php'); ?>