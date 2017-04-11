<?php
include "connect_db.php";
session_start();

$query1 = "SELECT SUM(transaction_amount) AS totals, MONTHNAME(date) AS months FROM transactions WHERE user_id =" .$_SESSION["id"]." AND sign="-" GROUP BY months";
//$query1="SELECT SUM(transaction_amount) FROM transactions WHERE user_id = ".$_SESSION["id"]." AND sign=\"-\" GROUP BY {fn MONTHNAME(date)}, YEAR(date)";
$result1=$conn->query($query1);

echo "[";

if($result1->num_rows>0){
	while($row=$result1->fetch_array()){
		echo "\"" .$row["totals"]. "\",";
	}	
}
else{
	echo "0 results";
}
echo"]";

?>