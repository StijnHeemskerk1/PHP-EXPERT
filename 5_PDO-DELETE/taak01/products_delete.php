<html>
    <a href="products_delete.php?id=0">Klik hier om id=0 te verzenden</a><BR>
</html>

<?php
    
    $database_connectie = new PDO("mysql:host=localhost;dbname=toolsforever", "root", "");
    $sql = "SELECT * FROM products";
    
    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id = :ph_id";
    $stmt = $database_connectie->prepare($sql);
    $stmt->bindParam(":ph_id", $id );
    $stmt->execute();