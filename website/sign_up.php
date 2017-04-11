<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <div class="container ">

        <form class="form-signin" action="sign_up_processing.php" method="post">
          <h3 class="form-signin-heading">Sign up for a Money Manager account:</h3>
          <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Create account</button>
          <div style="margin-top: 10px"><a href="login.html" class="btn btn-lg btn-success btn-block" role="button">Back to login page</a></div>
        </form>

    </div> <!-- /container -->

  </body>
</html>
