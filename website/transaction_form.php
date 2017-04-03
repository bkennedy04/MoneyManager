<?php include "header.php";?>
<html>
<div class="col-xs-7" style="padding-left: 0">
    <div class="panel panel-default">
      <div class="panel-heading">Enter Transaction</div>
      <div class="panel-body">
        <table class="table">
          <thead>
            <tr>
              <th>Transaction Amount</th>
              <th>Account Balance</th>
              <th>Category</th>
	      <th>Description</th>
 	      <th>Date</th>
            </tr>
          </thead>
	   <tbody>
		
	   </tbody>    	
        </table>
<form>
			<input type="text" transactionAmount="transactionAmount" size="20"> &emsp; &emsp; 
			<input type="text" accountBalance="accountBalance" size="18"> &emsp; 
			<input type="text" category="category" size="10"> &emsp; 
			<input type="text" description="description" size="10"> &nbsp;
			<input type="text" date="date" size="7"> &nbsp; <br>
			<input type="submit" value="Submit">
		</form>
      </div>
    </div>
</html>	