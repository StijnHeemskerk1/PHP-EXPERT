<?php

    $conn = new PDO("mysql:host=localhost;dbname=toolsforever", "root", "");
    $sql = "SELECT * FROM users";
    foreach ($conn->query($sql) as $row){
        print $row['id'] . ', ';
        print $row['firstname'] . ', ';
        print $row['lastname'] . ', ';
        print $row['email'] . ', ';
        print $row['password'] . '<br>';
    }






?>