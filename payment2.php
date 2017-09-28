<html>
<head>
    <meta charset="UTF-8" /> 
    <title>
      My Shop
    </title>
  
    <link rel="stylesheet" type="text/css" href="style.css" />
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
     

</head>



<!--  Start here -->

<body>
<div id="wrap">
	<div id="accordian">
		
				
		<div class="step" >
			

<div class="title">
				<h1>Payment Information</h1>
			</div>
			
		</div>
		</br></br>
		<div class="content" id="payment">
			<div class="left credit_card">
			<form class="go-right">
				<label for="card_number">Card Number</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type="text" name="card_number" value="" id="card_number" placeholder="xxxx-xxxx-xxxx-xxxx" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Number"/>
				</br></br></br></br>
				
				<div>
				<label class="exp_date" for="Exp_Date">Exp Date</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				
					
				      
				        <select name="exp_month" value="" id="exp_month" placeholder="Month" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date">
							<option value = "1">Jan</option>
                   			<option value = "2">Feb</option>
                   			<option value = "3">Mar</option>
                   			<option value = "4">Apr</option>
                   			<option value = "5">May</option>
                   			<option value = "6">Jun</option>
                   			<option value = "7">Jul</option>
                   			<option value = "8">Aug</option>
                   			<option value = "9">Sep</option>
                   			<option value = "10">Oct</option>
                   			<option value = "11">Nov</option>
                   			<option value = "12">Dec</option>
                        </select>
                   
                      <span class="divider">//</span>
                      
				        <select name="exp_year" value="" id="exp_year" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date">
							<option value = "1">14 </option>
                   			<option value = "2">15 </option>
                   			<option value = "3">16 </option>
                   			<option value = "4">17 </option>
                   			<option value = "5">18 </option>
                   			<option value = "6">19 </option>
                   			<option value = "7">20 </option>
                   			<option value = "8">22 </option>
                   			<option value = "9">23 </option>
                   			<option value = "10">24 </option>
                   			<option value = "11">25 </option>
                   			<option value = "12">26 </option>
                        </select>
            	    
            	    </div>
                 
            	  </div>
            	</br></br>
              <div> 
			  <label for="ccv">Security Code</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type="text" name="ccv" value="" id="ccv" placeholder="123" data-trigger="change" data-validation-minlength="3" data-type="name" data-required="true" data-error-message="Enter Your Card Security Code"/>
              
				      </div>
				      
			      </form>
			</div>
			</br></br>
			<div class="right">
				<div class="accepted">
					<span><img src="img/Z5HVIOt.png" height="42" width="42"></span>
					<span><img src="img/Le0Vvgx.png" height="42" width="42"></span>
					<span><img src="img/D2eQTim.png" height="42" width="42"></span>
					<span><img src="img/Pu4e7AT.png" height="42" width="42"></span>
					<span><img src="img/ewMjaHv.png" height="42" width="42"></span>
					<span><img src="img/3LmmFFV.png" height="42" width="42"></span>
				</div>
				</br></br>
				<div class="secured">
					
					<p class="security info">Your Information will be Deleted as soon as you will finalise your order</p>
				</div>
				
			</div>
			<a class="continue" href="payment3.php">Continue</a>

 		</div>