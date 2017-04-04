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

$sql0 = "SELECT account_balance FROM transactions WHERE time_added = (SELECT MAX(time_added) FROM transactions)";
$result0 = $conn->query($sql0);

if ($result0->num_rows > 0) {
    // output data of each row
		while($row = $result0->fetch_assoc()) {
			$current_balance = $row["account_balance"];
		}
}

$current_balance = $current_balance - $_POST["amount"];

$sql1 = "INSERT INTO transactions (account_balance, transaction_amount, category, description, date, sign) VALUES ('".$current_balance."', '".$_POST["amount"]."', '".$_POST["category"]."', '".$_POST["description"]."', '".$_POST["date"]."', '".$sign."')";

if ($conn->query($sql1) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>