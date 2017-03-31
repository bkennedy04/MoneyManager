<!DOCTYPE html>
<html>

<?php include "header.php"; ?>

  <div class="col-xs-6" style="padding-left: 0">
    <div class="panel panel-default">
      <div class="panel-heading">Transaction History</div>
      <div class="panel-body">
        <table class="table">
          <thead>
            <tr>
              <th>Change</th>
              <th>Category</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
			<?php include "transaction_table.php"; ?>
          </tbody>
        </table>
      </div>
    </div>
	<div class="panel panel-default">
		<div class="panel-heading">Category Spending Breakdown</div>
		<div class="panel-body" style="text-align: center">
			<canvas id="categories_chart" height="200px"></canvas>
		</div>
	</div>
  </div>
  <div class="col-xs-6" style="padding: 0">
    <div class="panel panel-default">
      <div class="panel-heading">Goals</div>
      <div class="panel-body">
        <?php include "goals.php"; ?>
      </div>
    </div>
	
    <div class="panel panel-default">
		<div class="panel-heading">Account Balance Over Time</div>
      <div class="panel-body">
        <canvas id="balance_chart" height="200px"></canvas>
      </div>
    </div>
  </div>
</body>

<script>
var ctx = document.getElementById("balance_chart");

var myLineChart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: <?php include "dates.php";?>,
		datasets: [{
			label: 'Balance',
			data: <?php include "balances.php";?>,
			fill: false
		}]
	},
	options: {
	  fill: false,
	}
});

var ctx = document.getElementById("categories_chart");

new Chart(ctx,{
				type:"pie",
		  data: {
		labels: <?php include "category_labels.php"; ?>,
		datasets: [{
				data: <?php include "firstphp.php"; ?>,
				backgroundColor: [
					"#FF0000",
					"#0000FF",
					"#00CC11",
					"#000000"
				],

			}]
	},
			options: {
				animation:{
				animateScale:true
			},
			legend: {
			  display: true
			}
	}
});
</script>

</html>