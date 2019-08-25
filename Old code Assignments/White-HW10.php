<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>

<?php

if (isset($_POST['day'],$_POST['date'],$_POST['year'])){
     $year = date("Y") - $_POST['year'];
    $date = (int)$_POST['date'];
    $day = (int)$_POST['day'];
   
}else{
    echo "There is an error <br />"; 
}
 
    

?>

<form action="White-HW10.php" method="_POST">
    Day:<br><input type="text" name="day"><br>
    Date:<br><input type="text" name="date"><br>
    Year:<br><input type="text" name="year"><br><br>
    <input type="submit" name="submit" value="Submit">
   
</form>

    </body>
</html>