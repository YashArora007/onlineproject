<?php
include("include/connect.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
		$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	
//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
}
	$name=mysqli_real_escape_string($db,$_POST['sno']);
	$lname=mysqli_real_escape_string($db,$_POST['pno']);
	$email=mysqli_real_escape_string($db,$_POST['name']);
	//$mobile=mysqli_real_escape_string($db,$_POST['Mobile']);
	$address=mysqli_real_escape_string($db,$_POST['color']);
	$pin=mysqli_real_escape_string($db,$_POST['size']);
	$pass=mysqli_real_escape_string($db,$_POST['price']);
	$image=basename($_FILES["fileToUpload"]["name"],".jpg");
	
	$ll=mysqli_real_escape_string($db,$_POST['brand']);
	$pp=mysqli_real_escape_string($db,$_POST['quality']);
	$oo=mysqli_real_escape_string($db,$_POST['stock']);
	$ii=mysqli_real_escape_string($db,$_POST['info']);
	$id=mysqli_real_escape_string($db,$_POST['ideal']);
	
	$sql="insert into products(s_no,p_no,p_name,p_url,p_color,p_size,p_price,brand,quality,stock,info,ideal_for) values($name,$lname,'$email','$image','$address','$pin',$pass,'$ll','$pp',$oo,'$ii','$id')";
	if(mysqli_query($db,$sql)){
		echo "Records added succesfully";
		
	}

	else{
		$error="INVALID ENTRY";
		echo $error;
	}
}
?>
<!DOCTYPE html>
<html lang="en">

</script>
  <link rel="stylesheet" href="themes/nav.css"/>
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>

	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="themes/bootshop/css/main.css" rel="stylesheet">

    
<body>

<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
	

<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Add</li>
    </ul>
	<h3>New Products</h3>	
	<div class="well">
	
	<form class="form-horizontal" action="add.php" method="post" enctype="multipart/form-data" >
		<h4>Product information</h4>
		
		
		
		
			<label class="control-label" for="inputFname1">S_no <sup>*</sup></label>
			<div class="controls">
			  <input type="integer" id="inputFname1" name="sno">
			</div>
			</br>
		 
		
			<label class="control-label" for="inputLnam">P_no<sup>*</sup></label>
			<div class="controls">
			  <input type="integer" id="inputLnam" name="pno">
			</div>
		 </br>
		
	  <label class="control-label" for="input_email">Name<sup></sup></label>
		<div class="controls">
		  <input type="text" id="input_email" name="name">
		</div>
		</br>

		<label class="control-label" for="inputPassword1">Image<sup>*</sup></label>
		<div class="controls">
		
		  <input type="file" name="fileToUpload" id="fileToUpload">
    
		</div>
        </br>
	 
		<label class="control-label" for="inputPassword1">color<sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="inputPassword1" name="color">
		</div>
	  
	 </br>
		<label class="control-label" for="inputPassword1">size <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="inputPassword1" name="size">
		</div>
	  
	</br>
		<label class="control-label" for="inputPassword1">price<sup>*</sup></label>
		<div class="controls">
		  <input type="integer" id="inputPassword1" name="price">
		</div>
		
	 	  
		</br>
	 <label class="control-label" for="input_email">Quality<sup></sup></label>
		<div class="controls">
		  <input type="text" id="input_email" name="quality">
		</div>
		</br>
		  <label class="control-label" for="input_email">Brand<sup></sup></label>
		<div class="controls">
		  <input type="text" id="input_email" name="brand">
		</div>
		</br>
		  <label class="control-label" for="input_email">Stock Available<sup></sup></label>
		<div class="controls">
		  <input type="integer" id="input_email" name="stock">
		</div>
		</br>
		  <label class="control-label" for="input_email">INFO<sup></sup></label>
		<div class="controls">
		  <input type="text" id="input_email" name="info">
		</div>
		</br>
		  <label class="control-label" for="input_email">Ideal For<sup></sup></label>
		<div class="controls">
		  <input type="text" id="input_email" name="ideal">
		</div>
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				
				<input class="btn btn-large btn-success" type="submit" value="Add" />
				
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