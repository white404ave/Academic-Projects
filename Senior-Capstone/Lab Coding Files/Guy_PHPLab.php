<?php
echo "My first line of PHP!";
//This is a single line of comment. 
# This is also a comment.
/*This is a comment block
it 
can 
span
multple lines
*/
echo "<br>";
/*Include the break tag after each new loine of
code for this assignment, or it will all be bunched 
up at the top of the page. */

echo strlen("Hello world!"); // outputs 12
echo "<br>"; 
echo str_word_count("Hello world!"); // outputs 2
echo "<br>"; 
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>"; 
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>"; 
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br>";
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $x+$y;
echo "<br>"; 
echo $txt;

echo "<br>"; 
echo "<br>"; 

//The examples below will output "Have a good day!" if the current time (HOUR) is less than 20:

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}

echo "<br>";
echo "<br>";

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "<br>";
echo "<br>";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "<br>";
echo "<br>";

function writeMsg() {
  echo "I'm writing this on a Raspberry Pi!";
}
writeMsg(); // call the function

?>