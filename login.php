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
    <body>
        <div class="container">
            <h1> LogIn</h1>
            <form action="validate.php" method="post">
            
                <label for="username" class="col-sm-2">User Name:</label>
                <input name="username" type="text" class="form-control" id="username" required>
            
                <label for="password" class="col-sm-2">Password:</label>
                <input name="password" required type="password" class="form-control" >
                <br>
                <input type="submit" value="Log In!" name="submit" class="btn btn-success">
            </form>
                <a href="index.php"> Not a Member Yet? Sign Up Now </a>
        </div>        
    </body>
    <?php
      include_once('footer.php');
    ?>
</html>