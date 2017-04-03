<?php 
include "header.php";
include "connect_db.php"; 

if($_POST["amount"]{0} == '-'){
	$sign = '-';
	$_POST["amount"] = substr($_POST["amount"],1);
}
else{
	$sign = '+';
}

$sql = "INSERT INTO transactions (account_balance, transaction_amount, category, description, date, sign) VALUES ('".$_POST["balance"]."', '".$_POST["amount"]."', '".$_POST["category"]."', '".$_POST["description"]."', '".$_POST["date"]."', '".$sign."')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>