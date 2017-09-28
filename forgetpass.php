<?php
include("include/connect.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=mysqli_real_escape_string($db,$_POST['Email']);
    $pass=mysqli_real_escape_string($db,$_POST['Password']);
	
	$sql="SELECT * FROM information WHERE loginid= '$email' and mobile= '$pass'";
	$result=mysqli_query($db,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$count=mysqli_num_rows($result);
	
	
		  
	if($count == 1){

		
		echo "YOUR PASSWORD IS -> "; 
		echo $row["password"];

	}
	
	    
	else{
	
	echo '$error';
}}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Shop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>

	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="themes/bootshop/css/main.css" rel="stylesheet">

<!-- Header End====================================================================== -->

<!-- Sidebar end=============================================== -->
	
    <ul class="breadcrumb">
		<li><a href="mainpage.php">Login window</a> <span class="divider">/</span></li>
		<li class="active">Forget password?</li>
    </ul>
	<h3> FORGET YOUR PASSWORD?</h3>	
	<hr class="soft"/>
	

		<div class="span12" style="min-height:300px">
			<div class="well">
			<h5>Reset your password</h5><br/>
			Please enter the email address for your account and your phone no. A verification will be done. If the details you will enter is correct then you can see your password on top of the window.<br/><br/><br/>
			<form method="post">
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">E-mail address</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail1" name="Email">
				</div>
				<label class="control-label" for="inputEmail1">Phone no</label>
				<div class="controls">
				  <input class="span3"  type="integer" id="inputEmail1" name="Password">
				</div>
			  </div>
			  <div class="controls">
			  <button type="submit" class="btn block">Submit</button>
			  </div>
			</form>
		</div>
		</div>
	</div>	
	


	
</body>
</html>