<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php
$sName = 'Pizzahurt'; 
$zip = '30458';
$phone = '222-333-5555';
$email = 'abc@xyz.com'; 

if (isset($_POST['sName'],$_POST['zip'],$_POST['phone'],$_POST['email'])){
    $sName = htmlentities($_POST['sName'], ENT_QUOTES, 'UTF-8');
    $zip = (int)$_POST['zip'];
    $phone = (int)$_POST['phone'];
    $email = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'); 
}
else{
	echo "There is an error <br />"; 
	displayForm('','','','');
}
function validateInput ($data, $fieldName){
	global $errorCount; 
	if (empty($data)) {
		echo "the field \"Store Name\" is required.<br/>\n"; 
			++$errorCount; 
			return $data; 
	}else{
		return stripslashes($data);
	}
	return ($data); 
}
	
	function validateEmail ($data, $pattern, $fieldName){
		global $errorCount; 
		if (empty($data) or !preg_match($pattern, $data)){
			echo "you must enter \"$fieldName\" in the form \"abc@xyz.com\".<br/>\n"; 
			++$errorCount; 
			$retval = $data; 
		}
		return($data); 
	}
	
	function validateZip ($data, $pattern, $fieldName){
		global $errorCount; 
		if (empty($data) or !preg_match($pattern, $data)){
			echo "you must enter \"$fieldName\" in the form \"30458\".<br/>\n"; 
			++$errorCount; 
			$retval = $data; 
		}
		return($data); 
	}
	function validatePhone ($data, $pattern, $fieldName){
		global $errorCount; 
		if (empty($data) or !preg_match($pattern, $data)){
			echo "you must enter \"$fieldName\" in the form \"222-333-5555\".<br/>\n"; 
			++$errorCount; 
			$retval = $data; 
		}
		return($data); 
	}
$errorCount = 0; 
$pattern =   '/.*/' ;
$fieldName = '/.*/';
$sName = validateInput($_POST['sName'], "Store Name") ;
$zip = validateZip($_POST['zip'], $pattern, "Zip Code") ;
$phone = validatePhone($_POST['phone'], $pattern, "Phone Number") ;
$email = validateEmail($_POST['email'],$pattern, "Email") ;

if ($errorCount>0){
	echo "Please use the \"Back\" button to re-enter the data.<br/>\n";
		}else{
		echo "Thank you for filling out the store form.<br> ";
		echo $sName.'<br>';
		echo $zip.'<br>'; 
		echo $phone.'<br>'; 
		echo $email.'<br>'; 
		}
function displayForm($sName, $zip, $phone, $email)
{
	?>
<form method="post">
<p>Store Name <input type="text"  name="sName" value="<?php echo $sName;?>"/></p>
<p>Zip Code <input type="text" name="zip" value="<?php echo $zip;?>"/></p>
<p>Phone <input type="text" name="phone" value="<?php echo $phone;?> "/></p>
<p>Email <input type="text" name="email" value="<?php echo $email;?> "/></p>
<p><input type="reset"/></p>
<p><input type="submit" value="Send" name="submit" /></p>
</form>
<?php
}
?>
</body>
</html>
