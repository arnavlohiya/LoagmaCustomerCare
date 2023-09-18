<?php
include "connection.php";
//$ray=['hei','gey','ew'];
if(isset($_POST) && !empty($_POST)){
	$num = $_POST['contactNumber'];
	$query = "select * from customerDetails where ContactNumber ='".$num."'";
	$queryResult = mysqli_query($conn,$query);
	$numRows = $queryResult-> num_rows;
	
	if($numRows > 0){
			$row = mysqli_fetch_assoc($queryResult);
			$sNo = $row['Serial'];
			$shopName = $row['ShopName'];
			$ownerName = $row['OwnerName'];
			$contactNumber = $row['ContactNumber'];
			$area = $row['Area'];
			$address=$row['Address'];
			$pactCode=$row['PactCode'];
			$category=$row['Category'];
			echo json_encode(array('sNo'=>$sNo,'ShopName'=> $shopName,'OwnerName'=>$ownerName, 'ContactNumber'=> $contactNumber,'Area'=>$area,'Address'=>$address,'PactCode'=>$pactCode,'Category'=>$category));
	}else{
		echo "0";
		}

}


?>




