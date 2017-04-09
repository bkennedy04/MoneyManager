<?php 
session_start();
include "header.php";
include "connect_db.php"; 

$sql = "INSERT INTO goals (description, end_date, amount, user_id) VALUES ('".$_POST["description"]."', '".$_POST["end_date"]."', '".$_POST["amount"]."', '".$_SESSION["id"]."')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>