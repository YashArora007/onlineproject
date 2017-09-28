<?php
include("include/connect.php");
SESSION_START();
?>
<!DOCTYPE html>
<html>
<?php include("include/header.php");
?>
	<link rel="stylesheet" type="text/css" media="all" href="themes/brown/style.css" />
		<?php
include("include/sidebar.php");
?>
<body>


<!-- Header End====================================================================== -->
<div id="richContent">

	<div id="mainBody">
	<div class="container">


	
	<div class="row">

					 
			<div class="span9">		
			<div class="well well-small">
			<h4>New Products 
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
			  	<?php
		//include("include/connect.php");
		
		$query=$db->query("SELECT * FROM products ");
		
		
		$result=mysqli_query($db,$sql1);
	
		
			while($row=$query->fetch_assoc()){
			?>
				<li class="span3">
				
				<a href="product_details.php?a= <?php echo $row['p_no'];?> &b=0"><img src="uploads/<?php echo $row['p_url'];?>.jpg"  alt=""></a>
					<div class="caption">
					  <h5><?php echo $row['p_name']; ?> </h5>
					 <h4><a class="btn" href="product_details.php?a= <?php echo $row['p_no'];?> &b=0">VIEW</a> </h4>
				
					</div>
				 
				</li>
				<?php 
			} ?>

		</div>
				  </div>
				  </div>
				  </div></div>
				 
			 </div>
				  </div>
				  </div></div>
				 

<?php
include("include/down.php");
?>


</body>
</html>

			