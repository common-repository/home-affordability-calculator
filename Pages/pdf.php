
<div class="shadow font" style="margin-top: 20px;margin-right: 10px;">
<h1>Customize Your PDF Template <a href="?page=WPBOXAFF_gopro" class="hac-pro">(Pro Features)</a></h1>



	<button type="button" class="btn" style="margin-top:40px;" onclick="window.open('https://docs.google.com/document/d/1DEEby2vda9Z1cX0gqe8B2oOC621SBOTwXhiP6wQKEEc/','_blank')">Edit Doc Template <i class="fas fa-edit"></i></button>

<p>* You can view the template in google doc. To be able to edit the template, go pro now.</p>
</div>


<div class="shadow" style="margin-top: 20px;margin-right: 10px;">

<div class="shadow_ font" style="margin-top: 20px;margin-right: 10px;">
<h1>Email SMTP Settings  <a href="?page=WPBOXAFF_gopro" class="hac-pro">(Pro Features)</a></h1>
<form onsubmit="save_hac_email();return false;" method="post" id="hac-mail-settings" data-hac-web-url="<?php echo $_SERVER['SERVER_NAME']; ?>">
<table style="width: 100%;max-width: 800px;border-collapse: collapse;text-align: center;" class="leads-table">
	<tr>
		<td>Port</td>
		<td><input type="text" class="khyzer" name="email-port" id="email-port" placeholder="Enter" value="587"></td>
	</tr>

	<tr>
		<td>Username</td>
		<td><input type="text" class="khyzer" name="email-username" id="email-username" placeholder="Enter (Ex: you@yourdomain.com)" value=""></td>
	</tr>


	<tr>
		<td>Password</td>
		<td><input type="text" class="khyzer" name="email-passw" id="email-passw" placeholder="Enter" value=""></td>
	</tr>


	<tr>
		<td>Host</td>
		<td><input type="text" class="khyzer" name="email-host" id="email-host" placeholder="Enter (Ex: mail.yourdomain.com)" value=""></td>
	</tr>

   <tr>
		<td>Sender Name</td>
		<td><input type="text" class="khyzer" name="email-sender" id="email-sender" placeholder="Enter (Ex: John Doe)" value="" required></td>
	</tr>

	<tr>
		<td>Email Subject</td>
		<td><input type="text" class="khyzer" name="email-subject" id="email-subject" placeholder="Enter (Ex: Affordibility Calculator)" value="Affordibility Calculator" required></td>
	</tr>

</table>

<button type="button" class="btn" id="hac-mail-test" style="margin-top: 20px;background-color: black;border:1px solid black" onclick="alert('This option is available in pro.')">Test Email Credentials <i class="fas fa-arrow-right"></i></button>

</form>

<!-- <div>
	<button type="button" class="btn" style="margin-top:40px;">Update SMTP Settings <i class="fas fa-sync"></i></button>
</div> -->

</div>
<div class="shadow_ font" style="margin-top: 70px;margin-right: 10px;position: relative;">
<h1>Email HTML Body  <a href="?page=WPBOXAFF_gopro" class="hac-pro">(Pro Features)</a></h1>
<textarea style="width:100%;max-width: 600px;height: 150px;" id="email-body-text-edit" name="email-body-text-edit">
Hello,<br><br>
Thank you for using our affordability Calculator.<br> Based on the information you provided, your personalised affordability results report is attached.<br><br>

Regards,
</textarea>

<div class="preview-email-wpbox">
<h2 style="text-align: center;">Preview</h2>
<div id="email-body-preview"></div>
</div>


<table class="html-dec">
	<tr>
		<td>HTML Code</td>
		<td>Description</td>
	</tr>

<tr>
	<td><xmp><br></xmp></td>
	<td>Inserts a space</td>
</tr>

<tr>
	<td><xmp><b> text to be bold here </b></xmp></td>
	<td>Bold</td>
</tr>
	
</table>

<div>
	<button type="button" class="btn" onclick="alert('Go Pro to unlock these settings.')" style="margin-top:40px;">Update Email Settings <i class="fas fa-sync"></i></button>
</div>

</div>

</div>



<script type="text/javascript">  $ = jQuery.noConflict(); </script>
<script type="text/javascript">
	$(document).on('input', '#email-body-text-edit', function() {
  $('#email-body-preview').html(this.value);
});

$('#email-body-preview').html( $('#email-body-text-edit').val() );	
</script>


<style type="text/css">
	input.khyzer[type="text"] {
    width: 460px;
    max-width: 460px;
}


.preview-email-wpbox {
    padding: 6px 20px;
    background-color: whitesmoke;
    min-height: 300px;
    min-width: 319px;
    max-width: 600px;
    position: absolute;
    font-size: 13px;
    right: -1%;
    top: 3%;
    /* border-radius: 0 16px 18px 0; */
    border-radius: 18px;
}


.html-dec{
	margin-top: 30px;
	width: 400px;
	text-align: center;
}

table.html-dec, table.html-dec tr td{
border: 1px solid black;
border-collapse: collapse;
}
</style>
