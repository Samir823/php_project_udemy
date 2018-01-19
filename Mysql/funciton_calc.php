<?php


function CalculatePrice(){ 
    
if(isset($_POST['submit'])){

$hours_start = $_POST['hours_start'];
$min_start = $_POST['minutes_start'];

$hours_end = $_POST['hours_end'];
$min_end = $_POST['minutes_end'];
        
    
$sec_start = $hours_start * 3600;
$all_sec_start = ($min_start * 60) + $sec_start;
    
$sec_end = $hours_end *3600;
$all_sec_end = ($min_end * 60) + $sec_end;

$diff_time = $all_sec_end - $all_sec_start;

$replace_diff = $diff_time / 60;
$precise_replace_dif = $replace_diff % 60;
    
/*
echo $replace_diff;
    
         echo "<br>";
    
    echo $precise_replace_dif;

         echo "<br>";
*/
 
    
    echo gmdate("H:i:s", $all_sec_start);
     echo "<br>";
  //  $seconds = $hours * 3600;
    echo gmdate("H:i:s", $all_sec_end);
      echo "<br>";
      echo gmdate("H:i:s", $diff_time);

    
    
   if($replace_diff >20 && $replace_diff<=35 ){
 echo "Cijena je 0.50 KM";
     

}
    if($replace_diff >35 && $replace_diff<=55 ){

    echo "Cijena je 1.00 KM";

}

    if($replace_diff >55 && $replace_diff<=65 ){

    echo "Cijena je 1.50 KM";

}
    if($replace_diff >65  && $replace_diff<=105 ){

    echo "Cijena je 2.00 KM";

}
    if($replace_diff >105 && $replace_diff<=120 ){

    echo "Cijena je 2.50 KM";

}
    if($replace_diff >120 && $replace_diff<=145 ){

    echo "Cijena je 3.00 KM";

}

if($replace_diff >145 && $replace_diff<=165 ){

    echo "Cijena je 3.50 KM";

}
if($replace_diff >165 && $replace_diff<=190 ){

    echo "Cijena je 4.00 KM";

}
    
if($replace_diff >190 && $replace_diff<=210 ){
    echo "Cijena je 4.50 KM";

}
    
if($replace_diff >210 && $replace_diff<=235 ){

echo "Cijena je 5.00 KM";

}
    if($replace_diff >235 && $replace_diff<=255 ){

echo "Cijena je 5.50 KM";

}        if($replace_diff >255 && $replace_diff<=270 ){

echo "Cijena je 6.00 KM";

}
    
        if($replace_diff >270 && $replace_diff<=292 ){

echo "Cijena je 6.50 KM";

}
    
        if($replace_diff >292 && $replace_diff<=315 ){

echo "Cijena je 7.00 KM";

}
            if($replace_diff >315 && $replace_diff<=337 ){

echo "Cijena je 7.50 KM";

}
                if($replace_diff >337 && $replace_diff<=360 ){

echo "Cijena je 8.00 KM";

}


}
}
?>
