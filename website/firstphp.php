<?php

$servername = "localhost";
$username = "brooke";
$password = "root";
$dbname = "Money_Manager";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query1 = "SELECT SUM(transaction_amount) FROM transactions WHERE category = 'food'";
$query2 = "SELECT SUM(transaction_amount) FROM transactions WHERE category = 'initial'";
$result1 = $conn->query($query1);
$result2 = $conn->query($query2);

echo "[";

	if ($result1->num_rows > 0) {
    // output data of each row
		while($row = $result1->fetch_assoc()) {
			echo $row["SUM(transaction_amount)"] . ",";
		}
	}
	else{
		echo "0 results";
	}

	if ($result2->num_rows > 0) {
    // output data of each row
		while($row = $result2->fetch_assoc()) {
			echo $row["SUM(transaction_amount)"] . ",";
		}
	}
	else{
		echo "0 results";
	}

echo "]";

$conn->close();

?>