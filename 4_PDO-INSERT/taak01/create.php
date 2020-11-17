<html>
    <form action="create.php" method="post">
        lastname: <input type="text" name="form_firstname"><br>
        firstname: <input type="text" name="form_lastname"><br>
        <input type="submit">
    </form>
</html>

<?php
    
    $database_connectie = new PDO("mysql:host=localhost;dbname=toolsforever", "root", "");
    $sql = "SELECT firstname, lastname FROM users";

    //gegevens uit een formulier ophalen met de post method.
    $firstName = $_POST['form_firstname'];
    $lastName = $_POST['form_lastname'];

    // !! De onderstaande code voegt gebruikers toe en geen producten. Pas de code aan.!!
    $sql = "INSERT INTO users (firstname, lastname) VALUES (:ph_firstname , :ph_lastname)" ;//sql query


    //een ID slaan we niet op, deze wordt automatisch aangemaakt door MySQL
    $stmt = $database_connectie->prepare($sql); //stuur naar mysql.
    $stmt->bindParam(":ph_firstname", $firstName ); //verbind de waardes
    $stmt->bindParam(":ph_lastname", $lastName ); //verbind de waardes
    $stmt->execute();
    
 