<html>
    <form action="create_location.php" method="post">
        name: <input type="text" name="form_name"><br>
        address: <input type="text" name="form_address"><br>
        city: <input type="text" name="form_city"><br>
        <input type="submit">
    </form>
</html>

<?php
    
    $database_connectie = new PDO("mysql:host=localhost;dbname=toolsforever", "root", "");
    $sql = "SELECT name, address, city FROM locations";
    
    
    //gegevens uit een formulier ophalen.
    $name = $_POST['form_name'];
    $address = $_POST['form_address'];
    $city = $_POST['form_city'];

    $sql = "INSERT INTO locations (name, address, city) VALUES (:ph_name , :ph_address, :ph_city)" ;//sql query
    $stmt = $database_connectie->prepare($sql); //stuur naar mysql.
    $stmt->bindParam(":ph_name", $name ); //verbind de waardes
    $stmt->bindParam(":ph_address", $address ); //verbind de waardes
    $stmt->bindParam(":ph_city", $city ); //verbind de waardes
    $stmt->execute();