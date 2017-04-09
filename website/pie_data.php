<?php

include "connect_db.php";

$query0 = "SELECT DISTINCT category FROM transactions WHERE sign LIKE '-' AND user_id = ".$_SESSION["id"];
$result0 = $conn->query($query0);

echo "[";

if ($result0->num_rows > 0) {
    // output data of each row
		while($row = $result0->fetch_assoc()) {
			$query1 = "SELECT SUM(transaction_amount) FROM transactions WHERE category = '" . $row["category"] . "'";
			$result1 = $conn->query($query1);
			
			if ($result1->num_rows > 0) {
			// output data of each row
				while($row = $result1->fetch_assoc()) {
					echo $row["SUM(transaction_amount)"] . ",";
				}		
			}
			else{
				echo "0 results";
			}
		}
	}
	else{
		echo "0 results";
	}
	
echo "]";

$conn->close();

?>