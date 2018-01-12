<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine =1;
    var $doors =4;




    function MoveWheels(){

        $this->wheels =10;


         }
    function CreateDoors(){
        
        $this->doors = 6;
        
        
        
    }
}

$bmw2 = new Car();
$bmw = new Car();
$truck = new Car();

echo $bmw->wheels . "<br>";

echo $truck->wheels =10 . "<br>";

$truck->CreateDoors();
echo $truck->doors;





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