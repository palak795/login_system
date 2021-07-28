<?php

echo "<pre>";

echo "<h1> Array / Nested-Loop< / If-Else / Switch / Simple Php Functions /h1>";

echo "<br>";

echo "<h2> Index Array using Loop </h2>";

$pens = array('parker','link','writometer','gel','ball');

echo "Pens Are <br><br>";


$arr_length = count($pens);


for($i = 0 ; $i < $arr_length ; $i++)

{ 

echo $pens[$i] . "<br>";

echo "<br>";


}

echo "<br>";

echo "<br>";

echo " %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% ";


echo "<h2> Index Array </h2>";


$Mobiles = array('Samsung','Iphone','Redmi','Oppo','Vivo');


echo " Mobiles are :  <br><br> " .$Mobiles[0] . " <br><br> "   .$Mobiles[1]  . " <br> <br> " 
. $Mobiles[2] ."<br><br> " . $Mobiles[3] .  "<br> <br>" .$Mobiles[4] ."<br> <br> ";


echo "<br>";

echo "<br>";

echo " %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% ";


echo "<h2> Loop Through an Associative Array </h2>";


$jewellery = array('earings' => '20,000','rings' => '15000','bangles' =>'50000','necklace' =>'100000','bracelet' =>'80000');


foreach($jewellery as $j=>$j_price){


	echo "Product = ". $j . "  ,  " . "value = "  .$j_price;


	echo "<br>";

	echo "<br>";

}

echo "<br>";


echo "<br>";


echo " %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% ";


echo "<h2> Associative Array </h2>";

$jewellery = array('earings' => '20,000','rings' => '15000','bangles' =>'50000','necklace' =>'100000','bracelet' =>'80000');


echo " single earing price is " . $jewellery['earings'] . "<br> ";

echo "<br>";

echo " single ring price is " . $jewellery['rings'] . "<br>";

echo "<br>";

echo " single bangles price is " . $jewellery['bangles'] . "<br>";

echo "<br>";

echo " single necklace price is " . $jewellery['necklace'] . "<br>" ;

echo "<br>";

echo " single bracelet price is " . $jewellery['bracelet'] . "<br>";

echo "<br>";

echo "<br>";

echo "<br>";

echo " %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% ";



echo "<h2> Two-dimensional Arrays </h2>";

$cars = array(

	array(" BMW " , 50 , 24),

	array(" Creta " , 80 , 40),

	array(" Scorpio " , 45 , 18),

	array("Kia-seltos" , 72 , 39),

	array(" Skoda " , 30 , 17),

);

echo $cars  [0] [0] .  " In Stock " .$cars[0][1] ." , sold " .$cars[0][2] . ".<br>";

echo "<br>";

echo $cars  [1] [0] .  " In Stock " .$cars[1][1] ." , sold " .$cars[1][2] . ".<br>";

echo "<br>";

echo $cars  [2] [0] .  " In Stock " .$cars[2][1] ." , sold " .$cars[2][2] . ".<br>";

echo "<br>";

echo $cars  [3] [0] .  " In Stock " .$cars[3][1] ." , sold " .$cars[3][2] . ".<br>";

echo "<br>";

echo "<br>";

echo " %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% ";


echo "<h2> Two-dimensional Arrays with loops </h2>";


$cars = array(

	array("BMW" , 50 , 24),

	array("Creta" , 80 , 40),

	array("Scorpio" , 45 , 18),

	array("Kia-seltos" , 72 , 39),

	array("Skoda" , 30 , 17),

);

for ($row = 0 ; $row < 5 ; $row++) 

{

  echo " <b> Row number  ".  $row . "</b>";

  echo "<br>";


  echo " <ul> ";

	  for ($col = 0 ; $col < 3 ; $col++) 

	  {

	    echo  "<li>". $cars[$row][$col] . "</li>";

	    echo "<br>";

	  }

  echo "</ul>";

}
echo "<br>";

echo "<br>";

echo " %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% ";



echo "<h2> Two-dimensional Arrays with loops </h2>";


$Mobile_phone = array(

	array("Iphone" , 80 , 44),

	array("Oneplus" , 60 , 40),

	array("Samsung" , 78 , 38),

	array("Redmi" , 92 , 59),

	array("Oppo" , 30 , 17),

);

for ($row = 0 ; $row < 5 ; $row++) 

{

  echo " <b> Mobile_No  ".  $row . "</b>";


  echo " <ul> ";

	  for ($col = 0 ; $col < 3 ; $col++) 

	{

	    echo  "<li>". $Mobile_phone[$row][$col] . "</li>";

	    echo "<br>";

	}

  echo "</ul>";

}

echo "<br>";

echo "<br>";

echo " %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% ";



function check_vote() //function has been declared
{
    $name = "Rakesh";

    $age = 17;

    if ($age >= 18) {

        echo $name . ", you Are Eligible For Vote";

    } 

    else {
        
        echo $name . ", you are not eligible for vote. ";
   
    }
}

echo "<h2> Php Functions  </h2>";


check_vote(); //function has been called


echo "<br>";

echo "<br>";

echo " %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% ";


function checking_vote() //function has been declared
{
    $name = "Sunaina";

    $age = 20;

    if ($age >= 18) {

        echo $name . ", you Are Eligible For Vote";

    } 

    else {
        
        echo $name . ", you are not eligible for vote. ";
   
    }
}

echo "<h2> Php Functions  </h2>";


checking_vote(); //function has been called


echo "<br>";

echo "<br>";

echo " %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% ";

echo "<h2> Nested Statements </h2>";


$number = "0";

if ( $number > 0 )

{

	echo " You have entered positive number : " .$number;

}

else if ( $number < 0 )

{

	echo " You have entered Negative number : " .$number;

}

else if ( $number == 0)

{ 
   echo " You entered number is 0 ";

}


echo "<br>";

echo "<br>";

echo " %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% ";


echo "<h2> If Else Statements </h2>";    	


$Total_Items = 50;
 

if ($Total_Items < 30)

{

  echo "Your Items are less than 30!";

}

else

{

  echo "Your Items is greater than or equal to 50!";

}  

echo "<br>";

echo "<br>";

echo " %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% "; 



echo "<h2> Switch Statements </h2>"; 

$fav_colors = 'green';


switch ($fav_colors) {


	case 'red':

	   echo "my favourite color is red";
		
		break;

	case 'blue':

	   echo "my favourite color is blue ";
		
		break;	

	case 'green':

	   echo "my favourite color is green";
		
		break;	

	case 'pink':

	   echo "my favourite color is pink";
		
		break;	
		
	case 'yellow':

	   echo "my favourite color is yellow";
		
		break;			
	
	default:
		
		echo "No color Selected";

		break;
}

echo "<br>";

echo "<br>";

echo " %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% "; 



echo "<h2> Switch Statements </h2>"; 

$fav_Fruits = 'Litchi';

switch ($fav_Fruits) {


	case 'Litchi':

	   echo "my favourite fruit is Litchi";
		
		break;

	case 'orange':

	   echo "my favourite fruit is orange ";
		
		break;	

	case 'banana':

	   echo "my favourite fruit is banana";
		
		break;	

	case 'Mango':

	   echo "my favourite fruit is pink";
		
		break;	
				
	
	default:
		
		echo "No fruit Selected";

		break;
}


echo "</pre>";


?>