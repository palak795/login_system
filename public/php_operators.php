<?php

echo "<h1> PHP Operators </h1>";

echo "<br>";

echo "<br>";

echo "<h3> PHP Arithmetic Operators </h3>";

$x = 10; 

$y = 6;

echo "<h5> PHP Exponential </h5>";

echo $x ** $y;

echo "<br>";

echo "<br>";

echo "<h5> PHP Modulas </h5>";

echo $x % $y;

echo "<br>";

echo "<br>";

echo "<h5> PHP Addition </h5>";


echo $x + $y;

echo "<br>";

echo "<br>";

echo "<h5> PHP subtraction </h5>";


echo $x - $y;

echo "<br>";

echo "<br>";

echo "<h5> PHP Division </h5>";

echo $x / $y;

echo "<br>";

echo "<br>";

echo "<h3> PHP Comparison Operators </h3>";

echo "<h5> Equal </h5>";


$x = 100;

$y = "100";

var_dump($x == $y);

echo "<h5> Identical </h5>";


$x = 100;

$y = "100";

var_dump($x === $y);

echo "<br>";

echo "<br>";

echo "<h5> Not Equal </h5>";


$x = 100;

$y = "100";

var_dump($x <> $y);

echo "<br>";

echo "<br>";

echo "<h3> PHP Logical Operators </h3>";

echo "<br>";

echo "<h5> AND </h5>";

$x = 100;

$y = 50;

if ($x == 100 and $y == 50) {

echo "Welcome To All!";

}

echo "<br>";

echo "<br>";

$x = 150;

$y = 80;

echo "<h5> XOr </h5>";

    if ($x == 150 xor $y == 70) {

    echo "Hello world!";

}

echo "<br>";

echo "<br>";


echo "<h5> && </h5>";

$x = 260; 

$y = 130;

if ($x == 260 && $y == 130) {

    echo "Hello Operators!";

}

echo "<br>";

echo "<br>";

echo "<h5> || </h5>";

$x = 100;

$y = 50;

if ($x == 100 || $y == 80) {

   echo "Something wrong!";

}

echo "<br>";

echo "<br>";

echo "<h2> PHP String Operators </h2> ";

echo "<h5> Concatenation </h5>";


$txt1 = " My Name Is : ";

$txt2 = " Palak!";

echo $txt1 . $txt2;

echo "<br>";

echo "<br>";



echo "<h4> Concatenation assignment </h4>";

$txt1 = "Hiiiiiii";

$txt2 = " to all world!";

$txt1 .= $txt2;

echo $txt1;




echo "<h2>PHP Array Operators</h2>";

echo "<br>";

echo "<h4>Union</h4>";

$x = array("a" => "red", "b" => "green");  


$y = array("c" => "blue", "d" => "yellow"); 


print_r($x + $y);

echo "<br>";

echo "<h4>Equality</h4>";


$x = array("a" => "red", "b" => "green");


$y = array("c" => "blue", "d" => "yellow"); 


var_dump($x == $y);

echo "<br>";

echo "<h4>InEquality</h4>";

$x = array("a" => "red", "b" => "green"); 

$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y);

echo "<br>";

echo "<h4>Identity</h4>";


$x = array("a" => "red", "b" => "green");  

$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);

echo "<br>";

echo "<h4>Non-Identity</h4>";


$x = array("a" => "pink", "b" => "purple");  

$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);

echo "<br>";

?>  







