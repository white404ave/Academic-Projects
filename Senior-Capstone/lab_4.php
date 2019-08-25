<?php
echo "My first line of PHP!";
// This is a single line comment in PHP
# So is this.

/*This is a comment block
it 
can 
span
multple lines
*/
echo "<br>"; 
/* Include this after each new line 
of code for this assignment, or it will 
all be bunched up at the top of the page */

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

/*
In the example below, we create a function named 
"writeMsg()". The opening curly brace ( { ) indicates 
the beginning of the function code and the closing 
curly brace ( } ) indicates the end of the function. 
The function outputs "Hello world!". 
To call the function, just write its name:
*/

function writeMsg() {
    echo "I'm writing this on a Raspberry Pi!";
}

writeMsg(); // call the function

/*
Information can be passed to functions through arguments. 
An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. 
You can add as many arguments as you want, just separate them with a comma.

The following example has a function with one argument ($piname). When the rasPiName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:
*/
echo "<br>";
echo "<br>";

function rasPiName($piname) {
    echo "$piname.<br>";
}

rasPiName("Raspberry Pi Zero");
rasPiName("Raspberry Pi 1");
rasPiName("Raspberry Pi 2");
rasPiName("Raspberry Pi 3");
rasPiName("Raspberry Pi 3B");
rasPiName("Raspberry Pi 3B+");
?>