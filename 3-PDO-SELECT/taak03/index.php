<?php
    $database_connectie = new PDO("mysql:host=localhost;dbname=toolsforever", "root", "");

    $sql = "SELECT * FROM users WHERE firstname = 'Mohamed' AND lastname = 'Hadid'";
    $statement = $database_connectie->prepare($sql);
    $statement->execute();

    $statement->bindParam(':firstname', $firstname);
    $statement->bindParam(':lastname', $lastname);

    $user = $statement->fetch();
    print_r($user);
    // print $user;

    

    


?>