<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cattack</title>
</head>
<body>
    <header> 
        <h1>The Cat-astrophe</h1>
        <p>There will be cats, everywhere.</p>
        <img src="cattack.jpg" alt="cat fight">
        <p>Check this out : <a href="index.php">Yolo</a></p>
    </header>

    <?php
    $prenom="Magma";
    $nom="Phosio";
    $note1 = 12;
    $note2 = 6;
    $moyenne = ($note1 + $note2)/2;

    echo "Bonjour $prenom $nom, vous avez eu $moyenne de moyenne"; 

    // echo 'Bj " . $prenom . ' ' . $nom ' vous avez eu ' . (($note1 + $note2)/2) . ' de moyenne';

    ?>

</body>
</html>