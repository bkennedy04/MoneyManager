<?php
include "connect_db.php";

$query0 = "SELECT DISTINCT category FROM transactions";
$result0 = $conn->query($query0);

echo "[";

if ($result0->num_rows > 0) {
    // output data of each row
		while($row = $result0->fetch_assoc()) {
			echo "\"" .$row["category"] . "\",";
		}
	}
	else{
		echo "0 results";
	}
	
echo "]";



$conn->close();

?>