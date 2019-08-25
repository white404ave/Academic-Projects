
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php
if  (isset($_POST['submit'])){
$sName = $_POST['sName'] ;
$zip = $_POST['zip'] ;
$phone = $_POST['phone'] ;
$email = $_POST['email'] ;
displayForm($sName, $zip, $phone, $email);
echo $sName. '<br/>'.$zip. '<br/>'.$phone. '<br/>'.$email;

}
else{
	echo "There is an error <br />"; 
	displayForm('','','','');
}
function displayForm($sName, $zip, $phone, $email)
{?>
<form action="WhiteCW4-1.php" method="post">
<p>Store Name <input type="text"  name="sName" value="<?php echo $sName;?>"/></p>
<p>Zip Code <input type="text" name="zip" value="<?php echo $zip;?>"/></p>
<p>Phone <input type="text" name="phone" value="<?php echo $phone;?>" /></p>
<p>Email <input type="text" name="email" value="<?php echo $email;?>" /></p>
<p><input type="reset"/></p>
<p><input type="submit" value="Send" name="submit" /></p>
</form>
</body>
</html>
<?php
}
?>
