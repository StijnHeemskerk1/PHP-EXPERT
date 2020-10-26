<?php
    $database_connectie = new PDO("mysql:host=localhost;dbname=toolsforever", "root", "");
    $sql = "SELECT * FROM locations WHERE city = 'Groningen'";
    
    $statement = $database_connectie->prepare($sql);
    $statement->execute();
    
    $user = $statement->fetch();
    print_r($user);
?>