
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MY Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="themes/nav.css"/>
   
   


	


    
<body>
<div id="logoArea" class="navbar" >
<?php
$var2=$_SESSION['name']; ?>

  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/mylogo.jpg" alt="Bootsshop" height="120px" width="120px" style="border-radius:100%"/></a>
		
	
    <ul id="topMenu" class="nav pull-right">
	 

	 <li class=""><a href="contact.php">Contact</a></li>
	 <li class=""> <a href="mainpage.php" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Sign Out</span></a>
	
</li>	
</br>
	
	 

</ul>
	

    
  </div><ul class="nav pull-right">
<h4><li class=""><a href="special_offer.php">   Welcome   <?php echo $var2 ?></a></li></h4></ul>
</div>   .
</div></body>


</html>