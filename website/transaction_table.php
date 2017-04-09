<?php

include "connect_db.php";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query1 = "SELECT transaction_amount, category, date, sign FROM transactions WHERE transaction_amount IS NOT NULL AND user_id = ".$_SESSION["id"]." ORDER BY date DESC";
$result1 = $conn->query($query1);
$var1;
$var2;


	if ($result1->num_rows > 0) {
    // output data of each row
		while($row = $result1->fetch_assoc()) {
		
			if($row["sign"] == "-"){
				$var1 = "danger";
				$var2 = "glyphicon glyphicon-arrow-down";
			}
			else{
				$var1 = "success";
				$var2 = "glyphicon glyphicon-arrow-up";
			}
?>

	        <tr class="<?php echo $var1; ?>">
              <td><span class="<?php echo $var2;?>" aria-hidden="true"><?php echo $row["transaction_amount"]; ?> </span></td>
              <td><?php echo $row["category"];?></td>
              <td><?php echo $row["date"];?></td>
            </tr>


<?php
		}
	}
	else{
		echo "0 results";
	}
?>
