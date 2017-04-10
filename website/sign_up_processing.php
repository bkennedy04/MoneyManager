<?php 

include "connect_db.php"; 

$sql0 = "SELECT username FROM users";
$result0 = $conn->query($sql0);
	if ($result0->num_rows > 0) {
    // output data of each row
		while($row = $result0->fetch_assoc()) {
			
			if($_POST["username"] == $row["username"]){
				include "sign_up.php";
				echo "<span style=\"color:#ff0000;text-align:center;\">User name already taken. Try again!</span>";
				exit();
			}
			else{
			
				continue;
			}
		}
	}
	
		
$sql = "INSERT INTO users (username, hash) VALUES ('".$_POST["username"]."', '".$_POST["password"]."')";
	if ($conn->query($sql) === TRUE) {
		echo "Account created.";
?>
		Go back to <a href="login.html">login page</a>.
<?php
	} 
	else {
		echo "Error creating account: " . $conn->error;
	}
	
/*
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
*/
$conn->close();
?>