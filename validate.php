<?php

require_once('connect.php');

 
$ok = true;

 
$uname = trim(filter_input(INPUT_POST, 'username'));
$upassword = trim(filter_input(INPUT_POST, 'password'));

if(empty($uname)) {
    echo "<p> Please provide your username! </p>"; 
    $ok = false; 
}
if(empty ($upassword)){
    echo "<p> Please provide your password! </p>"; 
    $ok = false; 
}


try { 
        if($ok === true ) {
            
            $sql = "SELECT user_id, user_name, password FROM persons WHERE user_name = :username"; 
             
            $stmt = $db->prepare($sql); 
             
            $stmt->bindParam(":username", $uname); 
            
            $stmt->execute(); 
             
            if($stmt->rowCount() == 1){ 
                if($row = $stmt->fetch()) {
                    if(password_verify($upassword, $row["password"])) { 
                        session_start();  
                        $_SESSION["id"] = $row["user_id"]; 
                        header("location:view.php"); 
                    }
                    else {
                        echo "<p> Problem validating your password!</p>"; 
                    }
                }
                else {
                    echo "<p> Error accessing your data!</p>";  
                }
            }
            else {
                echo "<p> No user found!</p>"; 
            }
            
                        
            $statement->closeCursor();
        }
    } catch (PDOException $e) {
        echo "<p> Sorry something went wrong!</p>";
    }
?>