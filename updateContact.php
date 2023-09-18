<?php
include "connection.php";
//$ray=['hei','gey','ew'];
if(isset($_POST) && !empty($_POST)){
	
	
	$sNo = $_POST['serial'];
	$shopName = $_POST['shopName'];
	$ownerName = $_POST['ownerName'];
	$contactNumber = $_POST['contactNumber'];
	$area = $_POST['area'];
	$address=$_POST['address'];
	$pactCode=$_POST['pactCode'];
	$category=$_POST['category'];
	
	
	
	
	$num = $_POST['contactNumber'];
	$query = "update customerDetails set 
	Serial ='".$sNo."', 
	ShopName ='".$shopName."',
	OwnerName ='".$ownerName."',
	ContactNumber ='".$contactNumber."',
	Area ='".$area."',
	Address='".$address."',
	PactCode ='".$pactCode."',
	Category='".$category."' 
	where ContactNumber = '".$contactNumber."'";
	
		
	
	
	if(mysqli_query($conn,$query)){
			
			echo '1';
	}else{
		echo '';
		}

}


?>




