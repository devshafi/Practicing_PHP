<?php

// integer in php
$num = 10;
echo "$num<br>";
echo "data type of num is ", var_dump($num), "<br>";

// float in php
$num = 10.32;
echo "data type of num is ", var_dump($num), "<br>";

// string in php
$txt = "I m a string";
echo "data type of txt is ", var_dump($txt), "<br>";


// array in php
$name = array("Shafi", "Rafi", "Mashrafi", "Rakib", "Imran");
echo "data type of name is", var_dump($name), " <br>";

// accessing array by index
echo $name[0], "<br>";
echo $name[1], "<br>";
echo $name[2], "<br>";
echo $name[3], "<br>";
echo $name[4], "<br>";


//Object in php

//creating a class
class Car
{
    //constructor function
    function Car()
    {
        $this->model = "VW";
    }
}

// making object of Car class
$lembo = new Car();

// showing property of a object
echo $lembo->model,"<br>";


// null data type

// Null is a special data type which can have only one value: NULL.
// A variable of data type NULL is a variable that has no value assigned to it.
$x = "Hello world!";
$x = null;
var_dump($x);