<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holà</title>
</head>
<body>

    <form action="" method="GET">
    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="female">♀
    <input type="radio" name="gender" value="male">♂
    <input type="submit" name="submit" value="Appuyer">
    
    </form>

<?php
if (isset ($_GET["gender"]) && !empty($_GET["gender"])) {
    $gender = $_GET["gender"];
    $greeting = ($gender == "female") ? "hola chica" : "hola chico";
    echo $greeting;
}
?>
    
</body>
</html>
