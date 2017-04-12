<?php
//session_start();
include "connect_db.php";
$query1="SELECT MONTHNAME(date) AS MonthName, YEAR(date) AS Year FROM transactions WHERE user_id = ".$_SESSION["id"]." AND transaction_amount IS NOT NULL GROUP BY MonthName";
$result1=$conn->query($query1);

echo "[";
if($result1->num_rows>0){
	while($row=$result1->fetch_array()){
		echo "'rgba(75, 192, 192, 0.2)',";
		}	
}
else{
	echo "0 results";}
echo"]";
?>