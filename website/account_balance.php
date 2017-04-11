<?php

include "connect_db.php";

$query0 = "SELECT account_balance FROM transactions WHERE time_added = (SELECT MAX(time_added) FROM transactions WHERE user_id = ".$_SESSION["id"]) AND user_id = ".$_SESSION["id"];
$result0 = $conn->query($query0);


if ($result0->num_rows > 0) {
    // output data of each row
		while($row = $result0->fetch_assoc()) {
		
			echo $row["account_balance"];
		}
	}
	else{
		echo "0 results";
	}
	

$conn->close();

?>