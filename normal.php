<?php
include("include/connect.php");

//SESSION_START();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MY Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="themes/nav.css"/>
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>

	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="themes/bootshop/css/main.css" rel="stylesheet">

    
<body>
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>

  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/mylogo.jpg" alt="Bootsshop" height="120px" width="120px" style="border-radius:100%"/></a>
		
	
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.php">Specials Offer</a></li>
	
	 <li class=""><a href="contact.php">Contact</a></li>
	 <li class="">
	 <br>
	 <br>
	
	

	
	</li>

    </ul>
	</div>
<!-- Header End====================================================================== -->
<div align="right" width="10px" padding="10px">
 <p align ="right">
	 <?php
	 //echo "WELCOME ".$_SESSION['name'];
	 ?>
	 </p>
</div>


	<div id="mainBody">
	<div class="container">
	<div class="row">
	</div>
	</div>
	</div>
	
	
	
	
	
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<?php
include("include/down.php");

?>
</body>
</html>