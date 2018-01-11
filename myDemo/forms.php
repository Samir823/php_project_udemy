<?php
    
if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
$name = array("Samir","Samid","Muhamed");
    
    //     print_r($username);
   
//        echo "Hello " . $username . " Your password is " . $password;   

    if(strlen($username) < 5 ){
        echo "username has to be longer than five";
    }
    if(!in_array($username,$name)){
        echo "Sorry you are not allowed";
    
    }else{
        echo "Welcome";
    }
    
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action ="forms.php" method="post">
	<input type="text" placeholder="Enter Username" name="username">
	<input type="password" placeholder="Enter password" name="password"><br>
    <input type="submit" name="submit">
</form>
    
</body>
</html>