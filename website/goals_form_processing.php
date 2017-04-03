<?php 
include "header.php";
include "connect_db.php"; 

$sql = "INSERT INTO goals (description, end_date, amount) VALUES ('".$_POST["description"]."', '".$_POST["end_date"]."', '".$_POST["amount"]."')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>