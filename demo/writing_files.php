<?php

$file = "example.txt";

if($handle = fopen($file,'w')){




    
    fwrite($handle, 'I love PHP and this is good staff, and so on');
    fclose($handle);
    
}else{

echo "The applicattion was not able to write on the file";

}



?>