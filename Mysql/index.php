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
    
    
    $start_play =gmdate("H:i", $all_sec_start);
    $end_play =gmdate ("H:i", $all_sec_end);
    $diference_start_end= gmdate("H:i", $diff_time);
    $collectTime;
    
   if($replace_diff >20 && $replace_diff<=35 ){
 //echo "Cijena je 0.50 KM";
     $collectTime = 0.50;

}
    if($replace_diff >35 && $replace_diff<=55 ){

    //echo "Cijena je 1.00 KM";
     $collectTime = 1.00;

}

    if($replace_diff >55 && $replace_diff<=78 ){

    $collectTime = 1.50;

}
    if($replace_diff >78  && $replace_diff<=105 ){

    
 $collectTime = 2.00;
}
    if($replace_diff >105 && $replace_diff<=120 ){

    
 $collectTime = 2.50;
}
    if($replace_diff >120 && $replace_diff<=145 ){

 $collectTime = 3.00;

}

if($replace_diff >145 && $replace_diff<=165 ){
$collectTime = 3.50;

}
if($replace_diff >165 && $replace_diff<=190 ){
$collectTime = 4.00;


}
    
if($replace_diff >190 && $replace_diff<=210 ){
$collectTime = 4.50;

}
    
if($replace_diff >210 && $replace_diff<=235 ){
$collectTime = 5.00;


}
    if($replace_diff >235 && $replace_diff<=255 ){
$collectTime = 5.50;


}        if($replace_diff >255 && $replace_diff<=270 ){
$collectTime = 6.00;

}
    
        if($replace_diff >270 && $replace_diff<=292 ){
$collectTime = 6.50;

}
    
        if($replace_diff >292 && $replace_diff<=315 ){
$collectTime = 7.00;

}
            if($replace_diff >315 && $replace_diff<=337 ){
$collectTime = 7.50;



}
            if($replace_diff >337 && $replace_diff<=360 ){
                    $collectTime = 8.00;

}

}
  
echo"<div class='start-time'>Vrijeme je pocelo u : $start_play</div>";
echo"<div class='end-time'>Vrijeme je zavrsilo u : $end_play</div>";
echo"<div class='diff-time'>Ukupno vremena : $diference_start_end</div>";    
echo"<div class='price'>Ukupno: $collectTime KM</div>";

    
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
    
    <style>
        
        h2{
        margin-bottom: 20px;
        
        }    
        .time-zone, .calculate-zone{
        margin-top: 100px;
        }
        .buttons-calculate{
        margin-top:40px;
        margin-left:10px;
        }
        h1{
        background-color:#c1ffff;
    }
        
    </style>
    <body>

        <div class="container">
            <h1>Calculate time and price for Xbox (Cafe Vis)</h1>
        <div class="row">
        
        <div class="time-zone col-lg-8 col-md-8">
           
            <h2 class="text-center">Unesi Vrijeme</h2>
            <form action="index.php" method="post" class="col-lg-12">
	<div class="col-md-6 col-lg-6" style="
	float: right;
	">
	<div class="form-group">
		<label for="hours">End Hours</label>
		<input type="number" name="hours_end" class="form-control" min="0" max="24">

	</div>
	<div class="form-group">
		<label for="minutes">End Minutes</label>
		<input type="number" name="minutes_end" class="form-control" min="0" max="60">
	</div>
	
</div>
<div class="col-md-6 col-lg-6">
	<div class="form-group">
		<label for="hours">Start Hours</label>
		<input type="number" name="hours_start" class="form-control" min="0" max="24">

	</div>
	<div class="form-group">
		<label for="minutes">Start Minutes</label>
		<input type="number" name="minutes_start" class="form-control" min="0" max="60">
	</div>
	
</div>

<div class="buttons-calculate">
<input class="btn btn-primary" type="submit" name="submit" value="Racunaj">
<input class="btn btn-danger" type="reset" name="reset" value="Ponisti">
</div>

</form>

            </div>
            
            
            <div class="col-lg-4 col-md-4 calculate-zone">
                <h2 class="text-center">Racun</h2>
                
                <?php
               CalculatePrice();
                
                ?>
                
                
            </div>
                    </div>
  </div>

    </body>
    </html>
