
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */
    if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $lastname = $_POST['last-name'];
    
    echo $username;
        //$username;
    
    }else{
    echo "nie";
    }
?>
    <form action ="6.php" method="post">
        <input type="text" name="name" placeholder="input your name"><br>
        <input type="text" name="last-name" placeholder="input your last name">
        <input type ="submit" name="submit">
    </form>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>