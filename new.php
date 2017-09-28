<?php
include("include/connect.php");
SESSION_START();

	if((isset($_POST['quantity'])) && !empty($_POST['quantity'])){
		$name2=$_POST['quantity'];
	echo $name2;}
?>
<html >
<?php include("include/header.php");?>
<form method="post" >
					<label class="control-label" for="inputFname1">quantity</label>
					<div class="controls">
					<input type="integer" class="span1"id="inputFname1" name="quantity">
					</form>
					
					<form action="product_details.php"   method="post">
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
		<?php include("include/sidebar.php");?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>	
	<div class="row">	  
	<input type="hidden" name="hdPId" value="<?php echo $_GET['a']; ?>"/>
	
	<?php
	$var=$_GET['a'];
	$var2=$_SESSION['name1'];
	if($_SERVER["REQUEST_METHOD"]=="POST"){
			
		
	//if((isset($_POST['quantity'])) && !empty($_POST['quantity'])){
		//$name2=$_POST['qty'];
	//echo $name2;
	//$var=$_GET['a'];
    
	$name=mysqli_real_escape_string($db,$var);
	$lname=mysqli_real_escape_string($db,$var2);



	
	
	$sql="insert into orders(customer_id,product_id) values('$lname',$name)";
	
	if(mysqli_query($db,$sql)){
		echo "Records added succesfully";
		
	}
	else{
		$error="INVALID ENTRY";
		echo '$error';
	}
	}
	

//$var=$_GET['hdPId'];

	
$var=$_GET['a'];

	

	

 
		$sql1="SELECT * FROM products where p_no=".$var;
		
       $result=mysqli_query($db,$sql1);
	


			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{ 
			?>
			<div id="gallery" class="span3">
            
				<img src="uploads/<?php echo $row['p_url'];?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
			</div>

			
			<div class="span6">
				<h3><?php echo $row['p_name'] ?></h3>
				
				<hr class="soft"/>
				<form class="form-horizontal"  >
				  <div class="control-group">
					<label class="control-label"><span> ₹ <?php echo $row['p_price'] ?></span></label>
					
					
					
					<label class="control-label" for="inputFname1">quantity</label>
					<div class="controls">
					<input type="integer" class="span1"id="inputFname1" name="quantity">
					<!--<input type="integer" class="span1"   name="qty"/>-->
					<input class="btn btn-large btn-success" type="submit" value="Register" />
					 <a class="btn btn-large btn-primary pull-right" href="viewcart.php?a=<?php echo $row['p_no']; ?> &b=<?php echo $_GET['qty'];?>  "> Add to cart </a>
					 
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
			<hr class="soft"/>
			</div>
			
			<div class="span9">
			
              <a class="btn btn-large btn-primary pull-right" href="viewcart.php?c=<?php echo $row["id"]; ?>"> View Cart </a>	
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table  height="10%" width="100%">
				
				
				<tr ><td>Brand: </td><td><?php echo $row['brand'] ?></td></tr>
				<tr ><td>Quality:</td><td ><?php echo $row["quality"] ?></td></tr>
				<tr ><td>Color:</td><td > <?php echo $row['p_color'] ?></td></tr>
					<tr ><td>Size:</td><td > <?php echo $row['p_size'] ?></td></tr>
						<tr ><td>Ideal For:</td><td > <?php echo $row['ideal_for'] ?></td></tr>
				</table>
				
				
              </div>
		
<?php
			} ?>
	</div>
</div>
</div> </div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<?php
include("include/down.php");

?>
</form>