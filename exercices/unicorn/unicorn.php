<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn</title>
</head>
<body>

    <form action="" method="get">
    <label for="nature">What's your spirit image:</label>
    <input type="radio" name="nature" value="human">Voldemort
    <input type="radio" name="nature" value="cat">Kat
    <input type="radio" name="nature" value="unicorn">Narwhal
    <input type="submit" name="submit" value="Discovery">
    </form>
    
    <?php

    $human = '<iframe src="https://giphy.com/embed/LLxwPAjfpLak8" width="480" height="337" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';
    $cat = '<iframe src="https://giphy.com/embed/BzyTuYCmvSORqs1ABM" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';
    $unicorn = '<iframe src="https://giphy.com/embed/ErBCToepmioTu" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';

    $nature = $_GET["nature"];
    
    if (isset($_GET["nature"]) && !empty($_GET["nature"])) echo ($nature == "human" ? $human : ($nature == "cat" ? $cat : $unicorn));

    ?>

</body>
</html>