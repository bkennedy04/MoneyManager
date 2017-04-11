<?php
session_start();
session_unset();
session_destroy();
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
      <div id="bar" class="imgcontainer">
       <!-- <img src="img/banking.jpg" alt="Avatar" class="avatar">-->
      <div class="row">
      <div class="col-sm-8">
        <div class="input-group">
          <h1>Welcome to Money Manager!</h1>
          <h4>Keep track of your money by visualizing your transactions.</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="input-group">
        <form class="form-signin" action="login_processing.php" method="post">
          <h2 class="form-signin-heading">Please sign in</h2>
          <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <div style="margin-top: 10px"><a href="sign_up.php" class="btn btn-lg btn-success btn-block" role="button">Register for an account</a></div>
        </form>
        </div>
      </div>
      </div>
      </div>
    </div> <!-- /container -->

  </body>
</html>