<?php

    $database_connectie = new PDO("mysql:host=localhost;dbname=toolsforever", "root", ""); //Connect dit aan de database
    
    // public PDO::query("SELECT * FROM locations");

    $sql = "SELECT * FROM locations"; //De mysql command in een variable
    $statement = $database_connectie->prepare($sql); //Linked de command aan de connected database en zet dit in een variable
    $statement->execute(); //Activeerd de command in de variable
    $database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC); //Pakt alle gegevens en saved alle in een variable

    foreach($database_gegevens as $gebruiker){  
        echo $gebruiker['id'] . "<br>";
        echo $gebruiker['name'] . "<br>";
        echo $gebruiker['address'] . "<br>";
        echo $gebruiker['city'] . "<br>";
    }

?>