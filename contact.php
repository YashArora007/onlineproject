<?php
include("include/connect.php");
SESSION_START();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>

	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="themes/bootshop/css/main.css" rel="stylesheet">
<html>
<?php include("include/header.php");?>
<body>

<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
	
	<div class="row">
		<div class="span4">
		<h2>Call Us:</h2>
		<p>	We're available 24 hours a day.
		<br/>
		(0124) 6150000 or 1800 208 9898
		</p>		
		</div>
		<h3>Mail us:</h3>	
	<div  style="padding:0px; margin:5px;width:100px;align:center; " class="span4">
           My Shop Internet Private Limited,<br>
Ozone Manay Tech Park,
#56/18 & 55/09, 7th Floor,
Garvebhavipalya, Hosur Road,
Bangalore - 560068,
Karnataka, India.

</div>
	<div class="container">
	<div class="row">
	
	<div class="span4" style="padding-left:150px; padding-bottom:50px;margin:5px;">
		<h4>Email Us</h4>
		<form class="form-horizontal">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="name" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="email" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="subject" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" class="input-xlarge"></textarea>
           
          </div>

            <button class="btn btn-large" type="submit">Send Messages</button>

        </fieldset>
      </form>
	  </div>
		</div>
		</div>
	
<div class="span12">
	
	<iframe src="https://www.google.com/maps/d/embed?mid=1ETs-lK1Jrr6-bFGQBLuLXICIkJg" width="1500" height="250"></iframe>
	
	
	</div>
	
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<?php include("include/down.php");?>
</body>
</html>