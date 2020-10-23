<?php
     $conn = new PDO("mysql:host=localhost;dbname=toolsforever", "root", "");
     $sql = "SELECT * FROM locations";
     foreach ($conn->query($sql) as $row){
        print $row['id'] . ', ';
        print $row['name'] . ', ';
        print $row['address'] . ', ';
        print $row['city'] . '<br>';
    }
?>