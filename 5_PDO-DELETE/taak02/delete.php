<html>
    <a href="delete.php?id=1">Klik hier om id=1 te verzenden</a><BR>
</html>

<?php
    
    $database_connectie = new PDO("mysql:host=localhost;dbname=toolsforever", "root", "");
    $sql = "SELECT * FROM users";
    
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = :ph_id";
    $stmt = $database_connectie->prepare($sql);
    $stmt->bindParam(":ph_id", $id );
    $stmt->execute();