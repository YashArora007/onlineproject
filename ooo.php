
<?php
 include("include/connect.php");
SESSION_START();?>
<!DOCTYPE html>
<html>
<?php include("include/header.php");?>
<body>
<!-- Header End====================================================================== -->
	<?php
include("include/sidebar.php");
?>
<div id="richContent">
<div id="mainBody">
	<div class="container">
	<div class="row">

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
if(isset($_GET['b'])){
	$var=$_GET['b'];
	
}
?>
<?php
		
		
		$sql1="SELECT * FROM products where s_no=".$var;
		
		$result1=mysqli_query($db,$sql1);
		
	//$row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
		
		
			while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC))
			{
			?>
			
			<li class="span3">
				
				<a href="product_details.php?a= <?php echo $row['p_no'];?> &b=0"><img src="uploads/<?php echo $row['p_url'];?>.jpg" alt=""></a>
					<div class="caption">
					  <h5><?php echo $row['p_name']; ?> </h5>
					 <h4><a class="btn" href="product_details.php?a= <?php echo $row['p_no'];?> &b=0">VIEW</a> </h4>
				
					</div>
				 
				</li>
				<?php
		}
			?>
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