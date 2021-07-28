<?php


echo "<h1> PHP OOP - Classes and Objects </h1>";


echo "<br>";


echo "<h2> Defining classes and Objects </h2>";


class Fruit {

  // Properties
  public $name;

  // Methods
  function set_name($name) {


    $this->name = $name;

  }

  function get_name()


   {

    return $this->name;

  }

}


$Orange = new Fruit();


$banana = new Fruit();


$Orange->set_name('Orange');


$banana->set_name('Banana');


echo $Orange->get_name();


echo "<br><br>";


echo $banana->get_name();


echo"<br>";

echo "<br>";

echo "<br>";


echo "<h2> setting and getting the color property: </h2>";

class Fruits

 {

  // Properties
  public $name;


  public $color;

  // Methods
  function set_name($name) 

  {


    $this->name = $name;

  }

  function get_name()

  {


    return $this->name;

  }


  function set_color($color) 

  {


    $this->color = $color;

  }


  function get_color() 

  {


    return $this->color;

  }


}


$apple = new Fruits();


$apple->set_name('Apple');


$apple->set_color('Red');


echo "Name: " . $apple->get_name();


echo "<br>";


echo "<br>";


echo "Color: " .  $apple->get_color();


echo "<br>";

echo "<br>";


echo "<h2> Defining Constructor in Php with 2 parameters </h2>";


class Books 

{


  public $name;


  public $author;


  function __construct($name, $author) 

  {


    $this->name = $name;


    $this->author = $author; 

  }


  function get_name() 

  {


    return $this->name;

  }


  function get_author() 

  {


    return $this->author;


  }


}

$salaria = new Books("Physics", "R.S.Salaria");


echo $salaria->get_name();


echo "<br>";


echo "<br>";


echo $salaria->get_author();


echo "<br>";

echo "<br>";



echo "<h2> Defining Constructor in Php with 3 parameters  </h2>";


class BookInfo 

{


  public $name;

  public $author;

  public $year_publish;
  

  function __construct($name, $author ,$year_publish) 

  {

  
    $this->name = $name; 

    $this->author = $author;

    $this->year_publish = $year_publish;
    
  }


  function get_name()

   {


    return $this->name;

  }


  function get_author() 

  {


    return $this->author;

  }


  function get_year() 

  {


    return $this->year_publish;


  }


}

$salaria = new BookInfo("Chemistry", "R.S.Aggarwal" ,"1991");


echo $salaria->get_name();


echo "<br>";

echo "<br>";


echo $salaria->get_author();

echo "<br>";

echo "<br>";


echo $salaria->get_year();

echo "<br>";

echo "<br>";



?>