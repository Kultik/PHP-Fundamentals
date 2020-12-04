<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Loops</title>
</head>
<body>
    
    <?php

        $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

        foreach($pronouns as $pronoun) {
            echo "$pronoun code <br>";
        }

        $numb = 1;
        while ($numb <= 120) {
            // echo "$numb<br>"; // to have them in column
            echo $numb; // in line
            $numb++;
        }

        echo"<br>";

        for ($bat = 1; $bat <= 120; $bat++) {
            echo $bat;
        }

        echo"<br>";

        $team = array (
            'batman',
            'robin',
            'red hood'
        );

        foreach($team as $crew) {
            echo "$crew <br>";
        }


        // COUNTRIES LOOP

        $countries = array (
            'Albania',
            'Russia',
            'Turkey',
            'Belgium',
            'England',
            'China',
            'Canada',
            'Atlantis',
            'Tortuga',
            'Narnia',
            'Mordor'
        );

        $iso = array (
            'AL',
            'RU',
            'TU',
            'BE',
            'EN',
            'CH',
            'CA',
            'AT',
            'TO',
            'NA',
            'MO'
        );

    ?>

    <label for="countries">Choose country:</label>
    <select name="countries" id="countries">
        <?php
            foreach ($countries as $country) {
                echo '<option value="'.$country.'">'.$country.'</option>';
            }
            echo '</select>';
        ?>
    </select>

        <?php
        
        $combo = array_combine($iso, $countries);

        ?>

    <select name="iso" id="iso">
        <?php
            foreach ($combo as $iso => $country) { // combo (qui combine, vers is (nouveau nom singulier) qui fleche vers son pays)
                echo '<option value="'.$iso.'">'.$country.'</option>';
            }
            echo '</select>';
        ?>
    </select>

</body>
</html>