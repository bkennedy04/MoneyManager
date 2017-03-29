<?php
include	"moneymanager.php";

$query1="SELECT Date from transactions";
$query2="SELECT AccountBalance from transactions";
$result1=$conn->query($query1);
$result2=$conn->query($query2);

if($result1->num_rows>0){
	while($row=$result1->fetch_array()){
	echo $row["'"."Date"."'".","];
		}	}	?>