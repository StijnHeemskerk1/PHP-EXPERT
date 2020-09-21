<?php

    $database_connectie = new PDO("mysql:host=localhost;dbname=toolsforever", "root", "");

    $sql = "SELECT * FROM users";
    $statement = $database_connectie->prepare($sql); //haal alle gebruikers op uit de database toolsforever
    $statement->execute();
    $database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($database_gegevens as $gebruiker){  
        echo $gebruiker['id'] . "<br>";
        echo $gebruiker['firstname'] . "<br>";
        echo $gebruiker['email'] . "<br>";
        echo $gebruiker['password'] . "<br>";
        echo $gebruiker['role'] . "<br>";

    }





?>