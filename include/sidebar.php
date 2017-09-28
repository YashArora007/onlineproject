<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>

	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="themes/bootshop/css/main.css" rel="stylesheet">

<div  class="span3">
		
			
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
		<?php
		//include("include/connect.php");
		
		$sql1="SELECT * FROM main";
		
		$result=mysqli_query($db,$sql1);
		
	//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		?>
		<?php
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
			?>
			<li 	>
			</br>
			<a><?php echo $row['m_name']; ?> <?php $m_no=$row['m_no'];?> 
		
			
				
				<?php
				$sql2="select  *  from  submain where m_no= ".$m_no;
		$result2=mysqli_query($db,$sql2);
		
			while($row2=mysqli_fetch_array($result2,MYSQLI_ASSOC))
			{
			?>
				<li><a href="ooo.php?b= <?php echo $row2['s_no'];?>"><i class="icon-chevron-right"></i><?php echo $row2['s_name'];?> </a></li>
				
			<?php
			}     
			?>
			<?php
			
			}?>
			
			</ul>
			</li>
			
			
			</a>
		</br>
				
		 
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
			
		
				
		
	
	</body>
	</html>