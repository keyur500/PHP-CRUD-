<?php ob_start();

try {
    // grab the user id 
    $id = filter_input(INPUT_GET,'id');

    //connect to db
    require_once('connect.php');

    //set sql statement 
    $sql = "DELETE FROM persons WHERE user_id = :user_id;";

    //prepare statement 
    $statement = $db->prepare($sql);

    // bind parameter method 
    $statement->bindParam(':user_id',$id);

    //execute query 
    $statement->execute();

    //close database connection 
    $statement->closeCursor();

    //send user to view.php
    header('location:view.php');
}catch (PDOEXCEPTION $e) {
    echo $e->getMessage();
}

ob_flush();
?>