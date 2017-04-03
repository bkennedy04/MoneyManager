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
	
	<div class="panel panel-default">
		<div class="panel-heading">Profits vs. Expenditures</div>
      <div class="panel-body">
        <canvas id="bar_chart" height="200px"></canvas>
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
				data: <?php include "pie_data.php"; ?>,
				backgroundColor: [
					"#FF0000",
					"#0000FF",
					"#00CC11",
					"#000000",
					"#ffff00",
					"#ff3399",
					"#ff9933",
					"#33ccff",
					"#990000"
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

var ctx = document.getElementById("bar_chart");

new Chart(ctx, {
    type: 'bar',
    data: {
		labels: ["January", "February", "March", "April", "May", "June", "July"],
		datasets: [
			{
				label: "My First dataset",
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1,
				data: [65, 59, 80, 81, 56, 55, 40],
			}
		]
	},
    options:  {
        scales: {
            xAxes: [{
                stacked: true
            }],
            yAxes: [{
                stacked: true
            }]
        }
    }
});
</script>

</html>