<?php
include("include/connect.php");
SESSION_START();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=mysqli_real_escape_string($db,$_POST['Email']);
    $pass=mysqli_real_escape_string($db,$_POST['Password']);
	
	$sql="SELECT * FROM information WHERE loginid= '$email' and password= '$pass'";
	$result=mysqli_query($db,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$count=mysqli_num_rows($result);
	$name1=$row["fname"];
	$name=$row["loginid"];	
	
	
	if($count == 1){
		if($row['u_type']== 'client'){
		$_SESSION['name']= $name;
		$_SESSION['name1']=$name1;
		
	header("location:normal.php");
	}
	else if($row['u_type']== 'admin'){
		$_SESSION['name3']=$name1;
		header("location:admin.php");
		
	}}
	    
	else{
	
	echo '$error';
}}
	?>

<!DOCTYPE html>
<html>
<?php include("include/header.php");?>



<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php include("include/sidebar.php");?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Login</h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span4">
			<div class="well">
			<h5>CREATE YOUR ACCOUNT</h5><br/>
			Enter your e-mail address to create an account.<br/><br/><br/>
			<form action="register.php">
			   <div class="controls">
			  <button type="submit" class="btn block">Create Your Account</button>
			  </div>
			</form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
			<form method="post">
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail1" name="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="password" class="span3"  id="inputPassword1" name="Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Sign in</button> <a href="forgetpass.php">Forget password?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<?php
include("include/down.php");

?>
</body>
</html>