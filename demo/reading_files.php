<?php

$file = "example.txt";

if($handle = fopen($file,'r')){

 echo $content = fread($handle,filesize($file)); //each bite equals a character
    
    
    fclose($handle);
    
}else{

echo "The applicattion was not able to write on the file";

}

?>