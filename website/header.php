<head>
  <title>Money Manager</title>
  <link rel="stylesheet" href="style.css"/>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Import jQuery -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- Import ChartJS -->
  <script src="Chart.min.js"></script>
  
    <!-- Set favicon -->
  <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>

<body>
<div class="container" style="margin-top: 10px">

  <nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Money Manager</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
		<!--
        <li><a href="goals_form.php">Add Goals</a></li>
        <li><a href="transaction_form.php">Add Transactions</a></li>
		<li><a href="account_balance_form.php">Update Account Balance</a></li>
		-->

        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Update Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="goals_form.php">Add Goals</a></li>
            <li><a href="transaction_form.php">Add Transactions</a></li>
            <li><a href="account_balance_form.php">Update Account Balance</a></li>
            <!--
			<li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
			-->
          </ul>
        

        </li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li><a href="#">Account Balance: <b>$<?php include "account_balance.php"; ?></b></a></li>
		<li><a href="help.php">Help</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>