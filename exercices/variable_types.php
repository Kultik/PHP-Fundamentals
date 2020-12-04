<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Types</title>
</head>
<body>
    <?php

    $firstname = "Külti";
    $age = 28;
    $eyecolor = "green";
    $family = array (
        0 => 'Clint',
        1 => 'Juan',
        2 => 'Brock',
        3 => 'Magma',
        4 => 'Jerry'
    );
    $hungry = true;

    echo "<p> Hi my name is $firstname. </p>
        \n <p> Hey there again, I'm $age years old, tough. </p>
        \n <p> My eyes are $eyecolor. </p>
        \n <p> Deep down, I am $family[3]. </p>
        \n Am I hungry ? $hungry.
        ";

    ?>
    
</body>
</html>