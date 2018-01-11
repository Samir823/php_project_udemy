<?php
    if(isset($_POST['submit'])){    

        
        
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection = mysqli_connect('localhost','root','root','loginapp');
        
        if($connection){
        echo "We are connected";
            
        }else{
        die("Datebase connection failed");
        }
        
        if($username && $password){
        
            
            echo $username;
            echo $password;
        
        
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


        <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for ="username">Username</label>
                <input type="text" name="username" class="form-control">

                </div>
                <div class="form-group">
                    <label for ="password">Password</label>
                <input type="text" name="password" class="form-control">
                </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">

            </form>

            </div>
        </div>

    </body>
    </html>