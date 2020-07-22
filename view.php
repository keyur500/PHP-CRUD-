<?php require_once('auth.php'); ?>

<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COMP1006 - Week 4 - Let's Connect </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&family=Quicksand&display=swap" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <link href="main.css" rel="stylesheet">
  </head>
  <body>
    <div class='container'>
      <?php include_once('nav.php'); ?>
        <main>
            <?php
                try{
                    //adding connection
                    require_once("connect.php");

                    //set up sql statement 
                    $sql = "SELECT * FROM persons WHERE user_id = ".$_SESSION['id'].";";
                
                    //prepare sql query
                    $statement = $db->prepare($sql);

                    //execute
                    $statement->execute();

                    //use fetchall to return and store the result as an array  
                    $records = $statement->fetchAll();

                    // echo out the table 
                    echo "<table class='table'>
                            <thead>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                            </thead>
                            <tbody>";
                    
                    foreach($records as $values):
                        echo"<tr>
                                <td>".$values['first_name']."</td>
                                <td>".$values['last_name']."</td>
                                <td>".$values['email']."</td>
                                <td><a href=delete.php?id=".$values['user_id'].">Delete</a></td>
                            </tr>";
                    endforeach;

                    echo "    </tbody>
                        </table>";

                    $statement->closeCursor();

                }catch(PDOEXCEPTION $e) {
                    $error_message = $e->getMessage();
                }
            ?>
        </main>
    </div>    
</body>
</html>