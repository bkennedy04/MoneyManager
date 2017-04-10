<?php

$sq2 = "SELECT user_id FROM users WHERE username LIKE '".$_POST["username"]."' AND hash LIKE '".$_POST["password"]."'";
$result2 = $conn->query($sql0);
	
	if ($result2->num_rows > 0) {
    // output data of each row
		if($row1 = $result2->fetch_assoc()) {
			
			$sql3 = "INSERT INTO transactions (account_balance, user_id) VALUES ('".$_POST["balance"]."', '".$row1["user_id"]."')";
			if ($conn->query($sql3) === TRUE) {
				
			} 
			else {
				echo "Error initializing account balance: " . $conn->error;
			}
		}
	}

?>