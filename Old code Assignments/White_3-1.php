<html>

<body>
 
<?php
$from='David Smith';
$to='John Doe';
$today=date("F j, Y, g:i a");
$subject='Reminder';

// Complete the memo template with the content of your choice
$msg='This is a '. $subject. 'of our meeting tomorrow '.$to.' at 10:00am.</br>Regards,<br></br>'.$from;

//Complete the printMemo function
function printMemo($from, $to, $today, $subject,$msg){
echo '<strong>From:</strong>'.$from.'</br>';
echo '<strong>To:</strong>'.$to.'</br>';
echo '<strong>Date:</strong>'.$today.'</br>';
echo '<strong>Subject:</strong>'.$subject.'<br></br>';
echo 'Dear '.$to.':<br></br>';
echo $msg.'<br></br>';

}

printMemo($from, $to, $today,$subject,$msg);

?>





</body>
</html>