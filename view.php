<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>View All user Data</title>
</head>
<body>
    <main>
        <?php
            try{
                //adding connection
                require_once("connect.php");

                //set up sql statement 
                $sql = "SELECT * FROM persons";

                //prepare sql query
                $statement = $db->prepare($sql);

                //execute
                $statement->execute();

                //use fetchall to return and store the result as an array  
                $records = $statement->fetchAll();

                // echo out the table 
                echo "<table border='1' cellpadding='5px' cellspacing='5px'>
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
                            <td><a href='delete.php?'".$values['user_id'].">Delete</a></td>
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
</body>
</html>