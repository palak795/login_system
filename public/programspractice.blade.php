<?php



echo "<h1> PHP Programs </h1>";

echo "<br>";

echo "<br>";

echo "<h3>PHP Program To Print Sum Of Digits</h3>";


$txt1 = "Sum of x and y is:";


$x = 1234;


$y = 4321;

 
echo "<h3>" . $txt1 . "</h3>";


echo $x + $y ;


echo "<br>";

echo" <h3> PHP Program To Check Prime Number </h3>";

echo "<br>";

echo "<br>";


$num = 53;


$count=0;  


for ( $i=1; $i<=$num; $i++ )  

{

if (($num%$i)==0) 

{  

$count++; 

}  

}


if ($count<3)

{  

echo "$num is a prime number."; 

}

else

{

echo "$num is not a prime number."; 

}


echo "<h3> PHP Program To Print Table Of A Number </h3>";


echo "<br>";

echo "<br>";


$num = 15;


for($i=1; $i<=10; $i++)  

{

$product = $i*$num;


echo "$num * $i = $product" ; 


echo "<br>";

echo "<br>";

}  


echo "<h2> PHP Program To Print Factorial Of A Number </h2>";

$n = 10; 

$f = 1;  

for ($i=$n; $i>=1; $i--) 

{  

$f = $f * $i;  

}  

echo "$n! = $f";


echo "<h2> PHP Program To Reverse A String </h2>";


$string = "MIRROR IMAGE"; 


echo "$string : " .strrev ( $string ); 


echo "<br>";

echo "<br>";


echo "<h2> PHP Program To Print Each Element Of An Array </h2>";


$cars = array("BMW", "Ford", "Hyundai", "Jaguar", "creta" , "Kia seltos");

 
foreach ($cars as $value) {


  echo "$value <br>";


  echo "<br>";


}


echo "<h2> PHP Program To Print An Array </h2>";


$food = array("PIZZA", "BURGER", "COKE");


echo "I love to eat " . $food[0] . ", " . $food[1] . " and " . $food[2] . ".";


echo "<br>";


echo "<br>";


echo "<h2> PHP Program To Find The Product Of Elements In An Array </h2>";

 
$numbers=array("10","20","30","40");


echo "Product of array elements is: ";


echo array_product($numbers);


echo "<br>";


echo "<br>";


echo "<h2> PHP Program To Join The Array Elements Into A String </h2>";


$arr = array("Have", "Courage.", "Live", "Free.");


echo join(" ",$arr);


echo "<br>";

echo "<br>";


echo "<h2> PHP Program To Join The Array Elements Into A String </h2>";


$arr = array("Do", "Good.", "Have", "Good.");


echo join(" ",$arr);


echo "<br>";

echo "<br>";


echo "<h2> PHP Program To Remove The Duplicate Values From An Array </h2>";


$arr = array("London","Paris","Switzerland","Switzerland","Scotland");


print_r(array_unique($arr));


echo "<br>";



?>