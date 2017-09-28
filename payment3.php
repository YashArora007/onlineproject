<?php
include("include/connect.php");
SESSION_START();
?>
		
<html>
<head>
    <meta charset="UTF-8" /> 
    <title>
      My Shop
    </title>
  
    <link rel="stylesheet" type="text/css" href="style.css" />
		
	<link rel="stylesheet" href="bootstrap/css/animate.min.css">
	<link rel="stylesheet" href="bootstrap/css/style1.css">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}


/* Center the image and position the close button */
.imgcontainer {
	
    text-align: center;
    margin: 25px 0px 12px 0;
    position: relative;
}


.container {
    padding: 10px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 20%; /* Could be more or less, depending on screen size */
}


/* Add Zoom Animation 
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}*/

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>

</head>


<!--  Start here -->

<body>
<div id="wrap">
	<div id="accordian">
		
				
		<div class="step" >
			
			<div class="title">
				<h1>Finalize Order</h1>
			</div>
		
		</div>
						<?php
  $var2=$_SESSION['name'];
  $var1=$_SESSION['name1'];
  ?>


			
					<div >
					
						<h3> Dear Coustmer  <?php echo $var2;  ?> </h3>
						TO FINALISE YOUR ORDER OF -->
						
						
			
					
											
				</div>
				
				</br></br>
						<span class="subtitle">COUSTOMER LOGIN ID :<span id="sub_ship"><?php echo $var1 ?>  </span></span>
			

				
			
			
		
				
			
			
			</br></br>
					
				<div class="payment">
					<span class="title">PAYMENT INFORMATION : </span>&nbsp&nbsp&nbsp&nbsp
			
						
						<span class="number_hidden">xxxx-xxxx-xxxx-1111</span>
					</div>
				</div>
							<div id="complete">
				
				<button onclick="document.getElementById('id01').style.display='block'" onclick="setTimeout(myFunction, 3000);" class="big_button" style="width:100%;"  
>FINALISE ORDER</button>


				<span class="sub">By selecting this button you agree to the purchase and subsequent payment for this order.</span> 
			</div>


</div>
		
<div id="id01" class="modal">
  

    <div class="imgcontainer">
      <img src="img/thankyou.jpg" onclick="setTimeout(myFunction, 1000);"/>
  <script>
function myFunction() {
 window.location.href="index.php";
}
</script>
    </div>


   

</div>
				</body>
				</html>
					
				<!--	<span class="subtitle">SHIPPING ADDRESS :<span id="sub_ship"><?php echo $row['address'];  echo $row['mobile'] ?></span></span>

  
$sql="SELECT * FROM information where loginid=".$var1;
	
    $result=mysqli_query($db,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>	
				