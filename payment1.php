<?php

SESSION_START(); ?>
<!DOCTYPE html>
<!-- By Designscrazed.com , just a structure for easy usage. -->

<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
      My Shop
    </title>
  
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="themes/nav.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
	
  

	
	
	
	

</head>
<body>


<!--  Start here -->

<body>
<div id="wrap">
	<div id="accordian">
		
				<?php 
				  $var1=$_SESSION['name'];
				?>
		<div class="step" >
			
			<div class="title">
				<h1>        Shipping Information</h1>
			</div>
		
		<div class="content" id="address">
			<form class="form-horizontal" method="post" >
				<div>
				<h2><label for="last_name">Dear Coustmer  <?php echo $var1 ?> </h2>Please Enter Your Shipping Information </label>
				
				</div>
				
		
	</br>

		<label class="control-label" for="inputPassword1">Mobile</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
		
		  <input type="integer" id="inputPassword1" name="Mobile">
	
        </br></br></br>
	 
		<label class="control-label" for="inputPassword1">Address</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
		  <input type="integer" id="inputPassword1" name="Address">
	
	  
	 </br></br></br>
		<label class="control-label" for="inputPassword1">Pincode </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
		
		
		  <input type="integer" id="inputPassword1" name="Pincode">
		
				
                  
          	
				
			</form>
			</br></br>
			
			 <a href="payment2.php" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Continue</span></a>
		</div>