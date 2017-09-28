	
<?php
include("include/connect.php");
SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Shop</title>
	
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="themes/css/style.css"/>
    <style>
    .container{padding: 50px;}
    input[type="number"]{width: 20%;}
    </style>

</head>
</head>
<body>
<div >
    <h1>Shopping Cart</h1>
	<div id="container">
    
	<div id ="main">
	</div>
    <table >
    
        <tr>
		<th>Order Id</th>`
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        
        </tr>
		</div>
		<?php
  $var2=$_SESSION['name1'];

      

		
		
			
		$sql1="SELECT * FROM orders";
	
		$result=mysqli_query($db,$sql1);
		while ($row=(mysqli_fetch_array($result,MYSQLI_ASSOC))){
			if($var2==($row['customer_id'])){
		
		 $p_no=$row['product_id'];
		
	
		
		
		$sql2="SELECT * FROM products where p_no=".$p_no;
		
		$result2=mysqli_query($db,$sql2);
		
		while($row2=(mysqli_fetch_array($result2,MYSQLI_ASSOC))){
			
			?>
        
		<tr>

            <td><?php echo $row['order_id'] ?></td>
	

			   <td style="width:20%; height:10% "> </br></br><img src="uploads/<?php echo $row2['p_url']?>.jpg" style="width:200px; height:150px" >&nbsp;&nbsp;&nbsp;</td>
            <td > ₹<?php echo $row2['p_price'] ?></td>
			
			  <td><form method="post">
			  <input type="number"  placeholder="<?php echo $row['quantity']?>" name="q" />
			  
			  <input type="submit" value="edit" name="edit"/>
			  
			  </form>
			  </td>
			 
			 
			  <?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(isset($_POST['edit']))
			{
	$qty=mysqli_real_escape_string($db,$_POST['q']);
			 	$o_no=$row['order_id']; 
			  $sql3="update orders set quantity=$qty where order_id= $o_no";
		mysqli_query($db,$sql3);}
		if(isset($_POST['Delete'])){
			$s="delete from orders  where product_id=".$_SESSION['p_no'];
			mysqli_query($db,$s);
			
			
		}
		
		
		}
			  ?>
					
		
			<?php $e= $row['quantity'] * $row2['p_price'] ?>
			<td> ₹<?php echo $e ?></td>
		
			  
			   
			
        
       </tr>
		<?php } ?>
		
		<?php } } ?>
    </table>
</div>
  <a href="index.php" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Countinue Shoping</span></a>
    <a href="payment1.php" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Payment</span></a>
</body>
</html>