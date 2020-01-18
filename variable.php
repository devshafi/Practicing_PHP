<?php

// declaring variable
$name = "Shafi";

// added variable in echo
echo "My name is $name <br>";

// another way of concatinating variable in php
echo "My name is ".$name."!<br>";

//variable concatination in declaring
$age = 32;
$description = "My age is " .$age. ". I like walking in the rain.<br>";
echo "$description";


//variable with global scope
$color = "red";

function readColor(){
    // using color inside the function will generate an error
    // echo "$color";  //undefined variable
}
// readColor();  //undefined variable

// to access a global variable we have to use the keyword global
$number = 50;
function readGlobal(){
    global $number;
    echo "$number <br>";
}
readGlobal(); // no error


// generally all the variable of a function are deleted after executing the functions
// but if we want to save the variable after execution we have use the keyword statc

function myStaticVaribale(){
    static $number = 0;
    echo "$number<br>";
    $number ++;
}

// all the functions are using previous value of number
myStaticVaribale();
myStaticVaribale();
myStaticVaribale();

