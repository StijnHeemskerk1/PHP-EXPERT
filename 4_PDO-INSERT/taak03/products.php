<html>
    <form action="products.php" method="post">
        name: <input type="text" name="form_name"><br>
        purchase_price: <input type="text" name="form_purchase_price"><br>
        selling_price: <input type="text" name="form_selling_price"><br>
        <input type="submit">
    </form>
</html>

<?php
    
    $database_connectie = new PDO("mysql:host=localhost;dbname=toolsforever", "root", "");
    $sql = "SELECT * FROM products";
    
    $name = $_POST['form_name'];
    $purchase_price = $_POST['form_purchase_price'];
    $selling_price = $_POST['form_selling_price'];

    $sql = "INSERT INTO products (name, purchase_price, selling_price) VALUES (:ph_name , :ph_purchase_price, :ph_selling_price)" ;
    $stmt = $database_connectie->prepare($sql);
    $stmt->bindParam(":ph_name", $name );
    $stmt->bindParam(":ph_purchase_price", $purchase_price );
    $stmt->bindParam(":ph_selling_price", $selling_price );
    $stmt->execute();