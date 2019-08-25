<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php
function validateInput ($data, $fieldName){
	global $errorCount; 
	if (empty($data)){
		echo "The field ,strong.\"fieldName\"</strong> is required.<br/>\n";
		++$errorCount; 
		
	}
	return $data; 
}
function validateIDPWinDB($id, $password){
	global $errorCount; 
	$dbh = new PDO('mysql:host=localhost; dbname=my_dbase','root','student');
	$sql="SELECT * FROM members WHERE id='$id' AND pw='$password'"; 
	$result = $dbh->query($sql); 
	$row = $result->fetch(); 
	if (empty($row)){
		echo "Invalid ID or PW";
		++$errorCount; 
	}
}
function redisplayForm($id, $password){
	if (isset($_COOKIE['id'])) {$id = $_COOKIE['id'];}
	?>
	<form action="white89-2.php" method = "get"> 
	<p>ID: <input type="text" name="id" value="<?php echo $id; ?>" /></p>
	<p>Password: <input type ="password" name="pass"/></p>
	<p> Remember my login ID:<input type="checkbox" name="remember" /></p>
	<p><input type="submit" name="submit" value = "Send"/></p>
	</form>
	<?php
}
	if (isset($_GET['submit'])){
		$errorCount = 0;
		$id = validateInput($_GET['id'], "id"); 
		$password = validateInput($_GET['pass'], "Password"); 
		validateIDPWinDB($id, $password);
		if ($errorCount>0){
			echo "Please re-enter the information below.<br />\n";
			redisplayForm('','');
		}else{
			echo "Thank you for filling out the store form.<br/>"; 
			if (isset($_GET['remember'])){
				setcookie('id', $id, time()+60); 
				echo "You are logged in and cookie is saved";
			}else{
				setcookie('id', "", time()-60);
				echo "You are logged in and no cookie is saved";
			}
		}
	} else {
		redisplayForm('', '');
		
	}

?>

</body>
</html>
