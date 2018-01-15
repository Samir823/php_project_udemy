<?php

class Car {

    static $wheels = 4;
    var $hood = 1;
    




    function MoveWheels(){

        //$this->wheels =10;
        Car::$wheels = 10;

         }
    function CreateDoors(){
        
        $this->doors = 6;
        
        
        
    }
}


$bmw = new Car();
Car::MoveWheels();

echo Car::$wheels;




/*
$bmw->wheels = 8;

echo $bmw->wheels;

echo $bmw2->wheels; 


echo "<pre>" ;
print_r($bmw2->wheels);
echo "</pre>";
*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    ?>
</body>
</html>