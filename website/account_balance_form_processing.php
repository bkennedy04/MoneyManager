<?php 
session_start();
include "header.php";
include "connect_db.php"; 

$sql = "INSERT INTO transactions (account_balance, user_id) VALUES ('".$_POST["balance"]."', '".$_SESSION["id"]."')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>