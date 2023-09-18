<html>
	<?php
include "navbar.php";
include "popper.min.js";

?>
	<head>
	<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	</head>

<!-- add a header that is same throughout the project -->


<!-- start of customer details fields-->
<form name="customerDetails">
<div class="container text-left mb-4 mt-4">
  <h2 class="ml-10 text-center" >Customer Details</h2><br>
  <div class="row mb-2" >
	  <div class="col-6">
		<label>Phone Number</label><input type="tel" class="" placeholder="Na" id="numberToSearch" name="numberToSearch">
		<input type="button" id="searchContactBtn" value="Enter" onclick= "searchContact()">
		</div>
	  <div class="col">
		<!-- formatting purpose-->
	  </div>
  </div>
  <div class="row mb-2" >
    <div class="col">
      <label>S.no</label><input type="number" class="" placeholder="Na" id="SNo" name="SNo"><br>
    </div>
    <div class="col">
      <label>Shop Name</label><input type="text"  class="" placeholder="NA" id="shopName" name="shopName"><br>
    </div>
    <div class="col">
      <label>Owner Name</label><input type="text" class="" placeholder="Na" id="ownerName" name="ownerName"><br>
    </div>
  </div>
  
  <div class="row mb-2">
    <div class="col">
      <label>Contact No.</label><input type="tel"  class="" placeholder="Na" id="contactNo" name="contactNo" required><br>
    </div>
    <div class="col">
      <label>Area</label><input type="text" class="" placeholder="Na" id="area" name="area" required><br>
      
    </div>
    <div class="col">
      <label>Address</label><input type="text" class="" placeholder="Na" id="address" name="address" required><br>
    </div>
  </div>
  
  <div class="row mb-2">
    <div class="col">
      <label>Pact Code</label><input type="number" class="" placeholder="Na" id="pactCode" name="pactCode"><br>
    </div>
    <div class="col">
      <label>Category</label><input type="text"  class="" placeholder="Na" id="category" name="category"><br><!--class="form-control"-->
    </div>
    <div class="col text-center">
      <!--formatting purpose--><br>
      <input type = "button" name = "Update" id="updateDetails" value = "Update">
    </div>
  </div>
  
</div>
</form>
<!-- end of customer details fields-->

<!--start of feedback/survey input--><br><br>
<form name ="feedbackDetails">
<h2 class="ml-10 text-center" >Feedback/Survey</h2><br><br>
<div class="container text-left">
  <div class="row">
    <div class="col">
      <label>Using Loagma &nbsp </label>
		<input type="radio" id="yes" name="usingLoagma" value="yes"><label for="yes">Yes</label>
		<input type="radio" id="no" name="usingLoagma" value="no"><label for="no">No</label><br>
    </div>
    <div class="col">
      <label>Using Other Apps &nbsp </label><br>
		<div class = "row">
			<div class="col-3">
				<input type="checkbox" id="udaan" name="udaan" value="udaan"><label for="udaan">Udaan</label><br>
				<input type="checkbox" id="solv" name="solv" value="solv"><label for="solv">Solv</label><br>
				<input type="checkbox" id="jio" name="jio" value="jio"><label for="jio">Jio</label>
			</div>
		<div class="col-3">
			<input type="checkbox" id="jumbo" name="jumbo" value="jumbo"><label for="jumbo">Jumbo</label><br>
			<input type="checkbox" id="walmart" name="walmart" value="walmart"><label for="walmart">Walmart</label><br>
			<input type="checkbox" id="other" name="other" value="other"><label for="other">Other</label><br><br>
		</div>
		</div>
	</div>
    <div class="col">
      <label>Requires Credit</label>
		<input type="radio" id="yes" name="requiresCredit" value="yes"><label for="yes">Yes</label>
		<input type="radio" id="no" name="requiresCredit" value="no"><label for="no">No</label><br>
    </div>
    
   <div class="row">
    <div class="col">
      <label class ="suggestions">Suggestions for company</label><br>
	  <textarea id="suggestions" name="suggestions" rows="4" cols="50" placeholder = "what can we do better? what products can we add?"></textarea><br><br>
    </div>
   </div>
   <div class="row">
	<div class="col text-center mt-5 mb-5">
		<input type="button" id="feedbackCompletedBtn" value="Feedback Completed" onclick="" >
	</div>
   </div>
   <div class="row">
    <div class="col">
		<button type="button" class="btn btn-secondary"
        data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        data-bs-title="Not interested, closed, Wrong number">
		Not Interested
		</button>
		<!--<input type="button" name="notInterestedBtn" value = "Not Interested" id="notInterestedBtn">-->
    </div>
    <div class="col">
		<input type="button" name="didNotLiftBtn" value = "Did not lift" id="didNotLiftBtn">
	</div>
	<div class="col">
		<label>Callback</label><input type="date" name = "callBack" >
		<input type="button" name="callBackBtn" value = "Enter" id="callBackBtn">
	</div>
   </div>
   
  </div>
</div>
</form>
<!--end of feedback/survey input-->
<script>
/**	
$("#searchContactBtn").click(function(){
	var number = $('#numberToSearch').val();
	//alert(number.length);
		
	if(number.length ==10){
			$.post("searchContact.php",
			{
				contactNumber: number
			},
			function(customerDetails){
				const details = JSON.parse(customerDetails);
				$("#SNo").val(details.sNo);
				$("#shopName").val(details.ShopName);
				$("#ownerName").val(details.OwnerName);
				$("#contactNo").val(details.ContactNumber);
				$("#area").val(details.Area);
				$("#address").val(details.Address);
				$("#pactCode").val(details.PactCode);
				$("#category").val(details.Category);
				
			});
	}else{//length not equal to ten
				//
	}
});**/
//$("#searchContactBtn").click(searchContact());

$("#updateDetails").click(function(){
	if($('#numberToSearch').val().length ==10){//10 digit number has been entered
		//Add a validation to check if the number exists in the database.
		$.post("searchContact.php",
		{
			contactNumber: $("#contactNo").val()
		},
		function(flag){
			if(flag!=''){
				$.post("updateContact.php",
					{
						 serial: $('#SNo').val(),
						 shopName: $("#shopName").val(),
						 ownerName: $("#ownerName").val(),
						 ownerName: $("#ownerName").val(),
						 contactNumber: $("#contactNo").val(),
						 area: $("#area").val(),
						 address: $("#address").val(),
						 pactCode: $("#pactCode").val(),
						 category: $("#category").val()
					},
					function(response)
						{
							if(response == 1){
								alert("Data of all columns updated succesfuly");
								//now change the details on the screen
							}
							else if(response= ''){//some error occured 
								alert("The given Contact number isn't available in the database.")
								
							}else{
							alert(response);	
							}
						});//end of second post
				
		}else{
			alert("Please enter a valid number");
		}
		});//end of first post
	}//end of main if
	else{
		alert("The number entered can't be updated. Please check the number ");
	}
});//end of function

function searchContact(){
	var number = $('#numberToSearch').val();
	//alert(number.length);
		
	if(number.length ==10){
			$.post("searchContact.php",
			{
				contactNumber: number
			},
			function(customerDetails){
				if(customerDetails!=0){
					
					const details = JSON.parse(customerDetails);
					$("#SNo").val(details.sNo);
					$("#shopName").val(details.ShopName);
					$("#ownerName").val(details.OwnerName);
					$("#contactNo").val(details.ContactNumber);
					$("#area").val(details.Area);
					$("#address").val(details.Address);
					$("#pactCode").val(details.PactCode);
					$("#category").val(details.Category);
				}
				else{
						alert('The number entered is not stored');
					}
			});
	}else{//length not equal to ten
				alert("Number is wrog");
	}
}//end of searchContact()
	
	

</script>
</html>
<!--


-->
