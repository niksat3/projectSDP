<?php

 
//Prefedined Variables  
$to = "checkingforms@yahoo.com";

// Email Subject
$subject = "Contact from your website.";


// This IF condition is for improving security  and Prevent Direct Access to the Mail Script.
if($_POST) {

// Collect POST data from form
$id = stripslashes($_POST['a']);
$name = substr(stripslashes($_POST['name']),8);
$email = substr(stripslashes($_POST['email']),9);
$phone = substr(stripslashes($_POST['phone']),9);
$amount = stripslashes($_POST['amount']);
$message= stripslashes($_POST['message']);
$date= stripslashes($_POST['dt']);
$datereal= stripslashes($_POST['dtp_input1']);

print '<input type="hidden" name="id" value="' . $id .  '"/>';
print '<input type="hidden" name="name" value="' . $name .  '"/>';
print '<input type="hidden" name="email" value="' . $email . '"/>';
print '<input type="hidden" name="phone" value="' . $phone . '"/>';
print '<input type="hidden" name="amount" value="' . $amount . '"/>';
print '<input type="hidden" name="message" value="' . $message . '"/>';
print '<input type="hidden" name="date" value="' . $datereal . '"/>';

// Collecting all content in HTML Table
$content='<table width="100%" style="font-size:20px">
<tr><td align "center"><b>Reservation Details</b></td></tr>
<tr><td>Name</td><td>: '.$name.'</td></tr>
<tr><td>Email</td><td>: '.$email.' </td></tr>
<tr><td>Phone</td><td>: '.$phone.'</td></tr>
<tr><td>People</td><td>: '.$amount.' people</td></tr>
<tr><td>Message</td> <td>: '.($message != '' ? $message : '-').'</td></tr>
<tr><td>Date</td> <td>: '.$date.'</td></tr>
</table> ';

print $content;

print "<br><H4>Check your data again. Is it correct?<br>";
print "<input type='submit' class='submitBtn1' value='Yes' style='clear:none'/>&nbsp&nbsp&nbsp";
print "<input type='submit' class='submitBtn2' value='No' style='clear:none'/>";
print "
	<script type='text/javascript'>
	$('.submitBtn1').click(function()
	{
		$.post(url + '/assets/php/reservation_form.php', $('#reservation_form').serialize(), function(data) { // action file is here 
			$('#reservation_form').html(data);
		});
	});
	$('.submitBtn2').click(function()
	{
		window.location = site_url + '/Controller/reservation/';
		return false;
	});
	</script>
";
// Define email variables
/*$headers = "From:".$email."\r\n";
$headers .= "Reply-to:".$email."\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8';

if( ! empty($name) && ! empty($email) && ! empty($content) ) {

// Sending Email 
if( mail($to, $subject, $content, $headers) ) {
print "<p>Thank you, we will getback to you shortly</p><br>";
return true;
}
else {
print "<p>Some errors to send the mail.</p>";
return false;
}
}
else {
print "<p>Some errors to send the mail.</p>";
return false;
}*/
}