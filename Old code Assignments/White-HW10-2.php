
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
<?php

$displayform = TRUE;

if (isset($_GET['submit']) == "send") {
	$displayform = FALSE;      
	
	$from    = "Hatter";
	$name    = "Alice";
    	$email   = "alice@mail.com";
    	$subject = "Tea at noon!";
    	$message = "Hi Alice, I hope you're ready for tea!";
	
	echo "Hi ".$from.", your message is ready to be sent to ".$name." <br/>";
	
	echo "From: ".$from."<br/>";
	echo "To:".$name."<br/>";
	echo "eMail:".$email."<br/>";
	echo "Subject:".$subject."<br/>";
	echo "Message:$message<br/>";	

}

if ($displayform){
	?>
	<form action="White-HW10-2.php?action=send" method="GET">
		<p> From (name): <br><input type="text" name="from"> </p>
		<p> To (name): <br><input type="text" name="sendto"> </p>
		<p> eMail: <br><input type"text" name="email"> </p>
		<p> Subject: <br><input type"text" name="subject"> </p>
		<p> Message:<br><textarea cols="20" rows="5" name="message"></textarea> </p>
		<p> <input type="submit" name="submit" value="Prepare Email"> </p>
	</form>
	<?php
}
?>
    </body>
</html>
