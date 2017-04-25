<?php 

include "connect_db.php"; 



$sql0 = "SELECT user_id FROM users WHERE username LIKE '".$_POST["username"]."' AND hash LIKE '".$_POST["password"]."'";
$result0 = $conn->query($sql0);

if ($result0->num_rows > 0) {
    // output data of each row
		while($row = $result0->fetch_assoc()) {
		 
			session_start();
			$_SESSION["id"] = $row["user_id"];
			include "home.php";
			
	
		}
}
else{

echo "Account not found.";
?>

<a href="login.html">Go back to log in page.</a>

<?php
}

?>