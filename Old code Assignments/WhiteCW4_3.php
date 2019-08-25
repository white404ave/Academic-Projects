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
    displayForm($sName, $zip, $phone, $email);
}
function validateInput ($data, $fieldName){
    global $errorCount; 
    if (empty($data)) {
       echo "you must enter the \"Store name\" in the form \".<br/>\n"; 
        ++$errorCount; 
        return $data; 
    }else{
        return stripslashes($data);
    }
    return ($data); 
}
function validateEmail ($data, $Pattern, $fieldName){
    global $errorCount; 
    if (empty($data) || !preg_match($Pattern, $data)){
        echo "you must enter \"email\" in the form \"abc@xyz.com\".<br/>\n"; 
        ++$errorCount; 
        $retval = $data;
    }
    return($data); 
}
function validateZip ($data, $Pattern, $fieldName){
    global $errorCount; 
    if (empty($data) or !preg_match($Pattern, $data)){
        echo "you must enter \"$fieldName\" in the form \"#####\".<br/>\n"; 
        ++$errorCount; 
        $retval = $data;
    }
    return($data); 
}
function validatePhone ($data, $Pattern, $fieldName){
    global $errorCount; 
    if (empty($data) or !preg_match($Pattern, $data)){
        echo "you must enter \"$fieldName\" in the form \"###-###-####\".<br/>\n"; 
        ++$errorCount; 
        $retval = $data;
    }
    return($data); 
}
function redisplayForm($sName, $zip, $email, $phone) {?>

<form name="store" action="WhiteCW4~3.php"   method="post">
    <p>
        Store Name: 
        <input type="text" name="sName" value="
<?php echo $sName; ?>" />
    </p>
    <p>
        Email: 
        <input type="text" name="email" value="
<?php echo $email; ?>" />
    </p>
   <p>
       Zip: 
        <input type="text" name="zip" value="
<?php echo $zip; ?>" />
    </p>
   <p>
        Phone: 
        <input type="text" name="phone" value="
<?php echo $phone; ?>" />
    </p>
    <p>
        <input type="reset"/>
        <input type="submit" name="Submit" value="Send Form" />
	</p>
    </form>
<?php
}

$errorCount = 0; 
$errorCount = 0; 
$pattern =   "" ;
$zipPattern = "$\d{5}$";
$emailPattern = "$\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$"; 
$phonePattern = "$[2-9]\d{2}-\d{3}-\d{4}$ ";
$fieldName =  "" ;
$sName = validateInput($_POST['sName'], "Store Name") ;
$zip = validateZip($_POST['zip'], $zipPattern, "Zip Code") ;
$phone = validatePhone($_POST['phone'], $phonePattern, "Phone Number") ;
$email = validateEmail($_POST['email'],$emailPattern, "Email") ;
if ($errorCount>0){
    echo "Please use the \"Back\" button to re-enter the data.<br/>\n";
	 redisplayForm($sName, $zip, $phone, $email);
}else{
    echo "Thank you for filling out the store form.<br> ";
    echo $sName.'<br>';
    echo $zip.'<br>'; 
    echo $phone.'<br>'; 
    echo $email.'<br>'; 
}
        ?>
    </body>
</html>
