<?php
 
if (isset($_POST['submit']) && isset($_POST['fullName'])){
     $name=$_POST['fullName'];
     $string = $name." woke up, and made a PHP tutorial.";
     displayForm($name, $string);
}
else{
     displayForm('','');
}

function displayForm($name, $string){?>
<form action='White-4_4.php' method="POST">
Type your name: <br>
<input type="text" name="name" value="<?php echo $x1; ?>" /><br>
<input type="submit" name="submit" value="Submit"/>  
</form>
<textarea rows='7' cols='25' ><?php echo $x2; ?></textarea> 
<?php
}

?>