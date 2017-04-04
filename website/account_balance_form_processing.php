<?php 
include "header.php";
include "connect_db.php"; 

$sql = "INSERT INTO transactions (account_balance) VALUES ('".$_POST["balance"]."')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>