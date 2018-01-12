<?php

class Car {


    function MoveWheels(){
        
    echo "Wheels move";

    }
    
}

if(method_exists("Car","MoveWheels")){

echo "Yea The method exitst";

}else{

echo "no";

}





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