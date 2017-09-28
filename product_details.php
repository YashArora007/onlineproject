<?php
include("include/connect.php");
SESSION_START();
?>

<!DOCTYPE html>
<html >
<?php include("include/header.php");?>
<body>
<?php include("include/sidebar.php");?>
<form action="product_details.php" >
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<?php

if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($db, $sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "p_price" => $row_p['p_price']);
		}else{
			$message="Product ID is invalid";
		}
	}
}
?>
		
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>	
	<div class="row">	  
	
				<?php 

	$var=$_GET['a'];
	$var1=$_GET['b'];
	
	$var2=$_SESSION['name1'];
if($var1==1)
{
	

	$name=mysqli_real_escape_string($db,$var);
	$lname=mysqli_real_escape_string($db,$var2);
	$email=mysqli_real_escape_string($db,'1');
	

	
	
	$sql="insert into orders(customer_id,product_id,quantity) values('$lname',$name,$email)";
	
	if(mysqli_query($db,$sql)){
		echo "Added To Cart";
		
	}
	else{
		$error="INVALID ENTRY";
		echo '$error';
	}
		

$sql1="SELECT * FROM products where p_no=".$var;
$result=mysqli_query($db,$sql1);
}
else {
		$sql1="SELECT * FROM products where p_no=".$var;
		
       $result=mysqli_query($db,$sql1);
} 


			$row=mysqli_fetch_array($result,MYSQLI_ASSOC)
			
			?>
			<div id="gallery" class="span3">
            
				<img src="uploads/<?php echo $row['p_url'];?>.jpg" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
			</div>

			
			<div class="span6">
				<h3><?php echo $row['p_name'] ?></h3>
				
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm" >
				  <div class="control-group">
					<label class="control-label"><span> ₹ <?php echo $row['p_price'] ?></span></label>
					<div class="controls">
					
					
					  <a class="btn btn-large btn-primary pull-right" href="product_details.php?a=<?php echo $row['p_no']; ?> &b=1  "> Add to cart </a>	
					 
					</div>
				  </div>
				</form>
				
				<hr class="soft"/>
				<h4>Stock Available:<?php echo $row['stock'] ?></h4>
				<form class="form-horizontal qtyFrm pull-right">
				  <div class="control-group">
					<label class="control-label"><span>Color:</span></label>
					<strong><?php echo $row['p_color'] ?></strong>
					<div class="controls">
					  
					</div>
				  </div>
				</form>
				<hr class="soft clr"/>
				<p>
				<?php echo $row['info'] ?>
				
				</p>
				
				<br class="clr"/>
			<a href="#" name="detail"></a>
		
			</div>
			
			<div class="span9">
				<hr class="soft"/>
             <a class="btn btn-large btn-primary pull-right" href="viewcart.php?c=<?php echo $row["id"]; ?>"> View Cart </a>
 <!--<a class="btn btn-large btn-primary pull-right" href="showcart.php?page=products&action=add&id=<?php echo $row["id"]; ?>"> View Cart </a>		-->	 
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <br>
			  <br>
			  <h4>Product Information</h4>
                <table  height="10%" width="100%">
				
				
				<tr ><td>Brand: </td><td><?php echo $row['brand'] ?></td></tr>
				<tr ><td>Quality:</td><td ><?php echo $row["quality"] ?></td></tr>
				<tr ><td>Color:</td><td > <?php echo $row['p_color'] ?></td></tr>
					<tr ><td>Size:</td><td > <?php echo $row['p_size'] ?></td></tr>
						<tr ><td>Ideal For:</td><td > <?php echo $row['ideal_for'] ?></td></tr>
				</table>
				
				
              </div>
		

	</div>
</div>
</div> </div>
</div>
</div></div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<?php
include("include/down.php");

?>

</body>
</html>