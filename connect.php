<?php
    $dsn = 'mysql:host=172.31.22.43;dbname=Keyur200447963';
    $username = 'Keyur200447963';
    $password = '7rk93qnVqc'; 
    $db = new PDO($dsn, $username, $password);
    //set error mode to exception 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>


