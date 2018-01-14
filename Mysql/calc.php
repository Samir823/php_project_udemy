<?php
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
    

echo $replace_diff;
    
         echo "<br>";
    
    echo $precise_replace_dif;

         echo "<br>";

     echo gmdate("H:i:s", $all_sec_start);
     echo "<br>";
  //  $seconds = $hours * 3600;
    echo gmdate("H:i:s", $all_sec_end);
      echo "<br>";
      echo gmdate("H:i:s", $diff_time);

    
    $variable_for_printing;
    
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


?>

  <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="container row">
        
        <div class="time-zone col-lg-8 col-md-8">
           
            <h1 class="text-center">Unesi Vrijeme</h1>
            <form action="calc.php" method="post" class="col-lg-12">
	<div class="col-md-6 col-lg-6" style="
	float: right;
	">
	<div class="form-group">
		<label for="hours">End Hours</label>
		<input type="number" name="hours_end" class="form-control">

	</div>
	<div class="form-group">
		<label for="minutes">End Minutes</label>
		<input type="number" name="minutes_end" class="form-control">
	</div>
	
</div>
<div class="col-md-6 col-lg-6">
	<div class="form-group">
		<label for="hours">Start Hours</label>
		<input type="number" name="hours_start" class="form-control">

	</div>
	<div class="form-group">
		<label for="minutes">Start Minutes</label>
		<input type="number" name="minutes_start" class="form-control">
	</div>
	
</div>

<input class="btn btn-primary" type="submit" name="submit" value="Racunaj">
<input class="btn btn-danger" type="reset" name="reset" value="Ponisti">


</form>

            </div>
            
            
            <div class="col-lg-4 col-md-4">
                
                
                
            </div>
            
  </div>

    </body>
    </html>