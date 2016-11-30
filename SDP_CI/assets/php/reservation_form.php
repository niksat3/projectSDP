<?php

// This IF condition is for improving security  and Prevent Direct Access to the Mail Script.
if($_POST) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdpdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Collect POST data from form
$id = stripslashes($_POST['id']);
$name = stripslashes($_POST['name']);
$email = stripslashes($_POST['email']);
$phone = stripslashes($_POST['phone']);
$amount = stripslashes($_POST['amount']);
$message = stripslashes($_POST['message']);
$date = stripslashes($_POST['date']);

$sql = "INSERT INTO booking VALUES (''," . $id . ",'',STR_TO_DATE('" . $date . "','%Y-%m-%d %r')," . $amount . ")";

$can = true;
$to = $email;
$subject = "Reservation Confirmation";
$txt = "Hello world!";
$headers = 'From: silverparadise22@gmail.com' . "\r\n" .
        'Reply-To: dhamaal_xxxx@yahoo.in' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

if($conn->query($sql) === TRUE and mail($to,$subject,$txt,$headers)) {
print "<p>Thank you, your reservation is ready.</p><br>";
$can = true;
}
else {
print "<p>Error, can't reserve.</p>";
$can = false;
}
}
else {
print "<p>Error, can't reserve.</p>";
$can = false;
}
print "<input type='submit' class='submitBtn2' value='Back to Home' style='clear:none'/>";
print "
	<script type='text/javascript'>
	$('.submitBtn2').click(function()
	{
		window.location = site_url + '/Controller/';
		return false;
	});
	</script>
";
return $can;