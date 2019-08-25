<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php
function displayRequired($fieldName){
    echo "Data entry error at " .$fieldName. "<br>";
}
function validateInput($data, $fieldName) {
    global $errorCount;
    if (empty($data)) {
        echo "The field \"$fieldName\" is required. <br />";
        ++$errorCount;
    }
    return($data);
}
function validateEmail($data, $ePattern, $fieldName){
    $ePattern ="^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$^";
    global $errorCount;
    if (empty($data) or !preg_match($ePattern, $data)) {
        echo "You must enter \"$fieldName\" in the form \"abc@xyz.com\". <br />\n";
        ++$errorCount;
    }
    return($data);
}
$ePattern ="^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$^";
function redisplayForm($tName, $cName, $email){?>
        <form action="WhiteCW_6-4.php" method="post">
            <table border = "0">
                <tr>
                    <td>
                        Team Name: 
                        <input type ="text" name="tName" value="
<?php echo $tName; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Captain Name: 
                        <input type="text" name="cName" value="
<?php echo $cName;?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email Address: 
                        <input type="email" name="email" value="
<?php echo $email;?>">
                        <tr>
                            <td>
                                Level of Competition
                            </td>
                        </tr>
                        <td>
                            Advanced 
                            <input type="radio" name="level" value="Advanced">
                    </td>
                    <td>
                        Intermediate 
                        <input type="radio" name="level" value="Intermediate">
                    </td>
                    <td>
                        Novice 
                        <input type="radio" name="level" value="Novice">
                    </td>
                </tr>
                <tr>
                    <td>
                        Preferred Days of Competition
                    </td>
                </tr>
                <tr>
                    <td>
                        Monday
                        <input type="checkbox" name="days[]" value="Monday">
                    </td>
                    <td>
                        Tuesday
                        <input type="checkbox" name="days[]" value="Tuesday">
                    </td>
                    <td>
                        Wednesday
                        <input type="checkbox" name="days[]" value="Wednesday">
                    </td>
                    <td>
                        Thursday
                        <input type="checkbox" name="days[]" value="Thursday">
                    </td>
                    <td>
                        Friday
                        <input type="checkbox" name="days[]" value="Friday">
                    </td>
                </tr>
                <tr>
                    <td>
                        Players on Your Team 
                    </td>
                </tr>
                <tr>
                    <td>
                        Player 1: 
                        <input type="text" name="players[]">
                    </td>
                </tr>
                <tr>
                    <td>
                        Player 2: 
                        <input type="text" name="players[]">
                    </td>
                </tr>
                <tr>
                    <td>
                        Player 3: 
                        <input type="text" name="players[]">
                    </td>
                </tr>
                <tr>
                    <td>
                        Player 4: 
                        <input type="text" name="players[]">
                    </td>
                </tr>
                <tr>
                    <td>
                        Player 5: 
                        <input type="text" name="players[]">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="send">
                    </td>
                </tr>
            </table>
        </form>
        <?php
                                              }
if (isset($_POST['submit'])){
    $errorCount = 0;
    $tName = validateInput($_POST['tName'], "Team Name");
    $cName = validateInput($_POST['cName'], "Captain Name");
    $email = validateEmail($_POST['email'], $ePattern, "Email");
    if(isset($_POST['level'])){
        $level = validateInput($_POST['level'], "Level of Competition");
    }else{
        displayRequired('level');
        ++$errorCount;
        $level = '';
    }if($errorCount>0){
        echo "Please re-enter the information below";
        redisplayForm($tName, $cName, $email);
    }else{
        echo"<b>Thank you for filling out the form</b><br>";
        echo $tName. "<br>";
        echo $cName."<br>";
        echo $email."<br>";
        echo $level."<br>";
        $days = "";
        foreach ($_POST['days'] as $x){
            print $x."<br>";
        }$players = "";
        foreach ($_POST['players'] as $y){
            print $y."<br>";
        }
    }
}else{
    redisplayForm('','','');
}
$x = array();
$y = array();
        ?>
    </body>
</html>


