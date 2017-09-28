<?php

include("include/connect.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=mysqli_real_escape_string($db,$_POST['Name']);
	$lname=mysqli_real_escape_string($db,$_POST['Names']);
	$email=mysqli_real_escape_string($db,$_POST['Email']);
	$mobile=mysqli_real_escape_string($db,$_POST['Mobile']);
	$address=mysqli_real_escape_string($db,$_POST['Address']);
	$pin=mysqli_real_escape_string($db,$_POST['Pincode']);
	$pass=mysqli_real_escape_string($db,$_POST['Password']);
	$u_type=mysqli_real_escape_string($db,'client');
	
	$sql="insert into information(loginid,fname,lname,mobile,address,pincode,password,u_type) values('$email','$name','$lname',$mobile,'$address',$pin,'$pass','$u_type')";
	if(mysqli_query($db,$sql)){
			
		header("location:mainpage.php");
		
	}
	else{
		$error="INVALID ENTRY";
		echo $error;
	}
}
?>
<!DOCTYPE html>
<html>

    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
   

	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	

<body>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">


<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="mainpage.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
	<div class="well">
	
	<form class="form-horizontal" method="post" >
		<h4>Your personal information</h4>
		<div class="control-group">
		<label class="control-label">Title <sup>*</sup></label>
		<div class="controls">
		<select class="span1" name="days">
			<option value="">-</option>
			<option value="1">Mr.</option>
			<option value="2">Mrs</option>
			
		</select>
		</div>
		</div>
		
		
		
			<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" name="Name">
			</div>
			</br>
		 
		
			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLnam" name="Names">
			</div>
		 </br>
		
	  <label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="input_email" name="Email">
		</div>
		</br>

		<label class="control-label" for="inputPassword1">Mobile no <sup>*</sup></label>
		<div class="controls">
		  <input type="integer" id="inputPassword1" name="Mobile">
		</div>
        </br>
	 
		<label class="control-label" for="inputPassword1">Address<sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="inputPassword1" name="Address">
		</div>
	  
	 </br>
		<label class="control-label" for="inputPassword1">Pincode <sup>*</sup></label>
		<div class="controls">
		  <input type="integer" id="inputPassword1" name="Pincode">
		</div>
	  
	</br>
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="inputPassword1" name="Password">
		</div>
		</br>
			<label class="control-label">Age <sup>*</sup></label>
		<div class="controls">
		<select class="span1" name="days">
			<option value="">-</option>
			<option value="1">11</option>
			<option value="2">12</option>
			<option value="2">13</option>
			<option value="2">14</option>
			<option value="2">15</option>
			
		</select>
		</div>
		</div>
	 	  
		</br>
		
		
	
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				
				<input class="btn btn-large btn-success" type="submit" value="Register" />
			</div>
		</div>		
	</form>
</div>

</div>
</div>
</div>
</div>



</body>
</html>