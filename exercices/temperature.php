<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryan</title>
</head>
<body>
    
    <?php

    $temperature = 10;

    if ($temperature >= 15) {
        $clothes = "NONE, I AM A WARRIOR";
        $should_I_wear_a_scarf = false;
    } else { 
        $clothes = "JUST A CAPE";
        $should_I_wear_a_scarf = true;
    }

    if ($should_I_wear_a_scarf == true) {
        grab_scarf();
    }

    cover($clothes);

    ?>



</body>
</html>