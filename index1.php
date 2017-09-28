
<?php
include("include/connect.php");?>
<!DOCTYPE html>
<html>
<?php include("include/header.php");?>
<body>
<!-- Header End====================================================================== -->

<div id="mainBody">
	<div class="container">
	<div class="row">
<?php

include("include/sidebar.php");?>
<!-- Sidebar end=============================================== -->
		<div class="span9">		
			<div class="well well-small">
			<h4>Featured Products</h4>
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
				  <div class="thumbnail">
				 <a href="product_details.php"><img src="uploads/<?php echo $row['p_url'];?> alt=""></a>
					<div class="caption">
					  <h5><?php echo $row['p_name']; ?> </h5>
					  <h4><a class="btn" href="product_details.php?a= <?php echo $row['p_no'];?>">VIEW</a> <span class="pull-right"><?php echo $row['p_price']; ?> </span></h4>
					</div>
				  </div>
				</li>
				<?php
		}
			?>
			</ul>
			</div>
				  </div>
				  </div></div>
				  </div></div>
				  </div>
				  </div></div>
				 
			
			

<?php
include("include/down.php");
?>

</body>
</html>