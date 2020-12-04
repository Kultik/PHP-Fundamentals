<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bat-family</title>
</head>
<body>
    
    <?php

    $batfamily = [
        "Batman",
        "Nightwing",
        "Robin",
        "Alfred",
        "Oracle"
    ];

    print_r($batfamily);

    echo "<br>";

    print($batfamily[0]);
    echo($batfamily[1]);

// Checking the Array content
    echo "<h4>Checking Array content</h4>"; 

    echo '<pre>';
    print_r($batfamily);
    echo '</pre>';

    echo "<h4>Checking Array content with Var_dump</h4>";

    var_dump($batfamily);

    echo "<h4>Adding element to Array</h4>";

    // LONG WAY
    array_push($batfamily, "Red Hood");

    echo '<pre>';
    print_r($batfamily);
    echo '</pre>';

    //SHORT WAY

    $batfamily[]='Catwoman';

    echo '<pre>';
    print_r($batfamily);
    echo '</pre>';

    echo "<h4>Key Value</h4>";

    $batfamily['function'] = 'Superheroes';
    echo $batfamily['function'];

    // ME ME ME 

    echo "<h4>Me and Multidimensional arrays</h4>";

    $batman = array (
        'name' => 'Bruce',
        'power' => 'Batman'
    );

    $me = array (
        'name' => 'Magma',
        'lastname' => 'Phosio',
        'powers' => array (
            'fire',
            'distorsions',
            'ink'
        ),
        'color' => 'red',
        'batman' => $batman
    );


    echo '<pre>';
    print_r($me);
    echo '</pre>';

    echo "<h4>Count elements in array : echo count(\$array)</h4>";

    echo count($batfamily);

    echo "<h4>Replacement</h4>";

    // $replacement = array (
    //     1 => 'Daugr'
    // );
    // $basket = array_replace($me, $replacement);

    $me['lastname'] = 'Yolo';

    print_r($me);


    echo "<h4>Soulmate</h4>";

    $soulmate = array (
        'name' => 'Ceru',
        'lastname' => 'Lee',
        'powers' => array (
            'fire',
            'wind',
            'voice'
        ),
        'color' => 'green',
        'batman' => $batman
    );

    echo "<h4>Merge/Intersect with Soulmate</h4>";

    $merge = array_merge($me['powers'], $soulmate['powers']);

    echo '<pre>';
    print_r($merge);
    echo '</pre>';

    $intersect = array_intersect($me['powers'], $soulmate['powers']);

    echo "<br>";

    echo '<pre>';
    print_r($intersect);
    echo '</pre>';


    echo "<h4>GLADIATOR</h4>";

    $web_development = array (
        'frontend' => array(),
        'backend' => array ()
    );

    array_push($web_development['frontend'], 'xhtml');
    array_push($web_development['backend'], 'ruby on lsd');
    array_push($web_development['frontend'], 'javascript');

    echo '<pre>';
    print_r($web_development);
    echo '</pre>';

    $replacement = array (
    0 => 'html'
    );
    $web_development['frontend'] = array_replace($web_development['frontend'], $replacement);

    echo '<pre>';
    print_r($web_development);
    echo '</pre>';

    unset($web_development['frontend'][1]);

    echo '<pre>';
    print_r($web_development);
    echo '</pre>';

    ?>

</body>
</html>