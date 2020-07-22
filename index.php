<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COMP1006 - Lab 5 - Summer 2020 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&family=Quicksand&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <header>
      <?php include_once('nav.php'); ?>
      <h1> COMP1006 - Lab Nine</h1>
    </header>
    <main>
      <form action="process.php" method="post">
        <h1>User Registration</h1>
        <label for="fname"> Your First Name  </label>
        <input type="text" name="fname" class="form-control" id="fname">
        <label for="lname"> Your Last Name  </label>
        <input type="text" name="lname" class="form-control" id="lname">
        <label for="email"> Your Email </label>
        <input type="email" name="email" class="form-control" id="email">
        <label for="uname"> Your UserName </label>
        <input type="text" name="uname" class="form-control" id="uname">
        <label for="passwd"> Your Password </label>
        <input type="password" name="passwd" class="form-control" id="passwd">
        <label for="confirm_passwd"> Confirm Password </label>
        <input type="password" name="confirm_passwd" class="form-control" id="confirm_passwd">
        <br>
        <input type="submit" name="submit" value="Send & Share" class="btn btn-primary">
      </form>
    </main>
    <?php
      include_once('footer.php');
    ?>
   </div><!--end container-->
  </body>
</html>