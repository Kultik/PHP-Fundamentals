
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h4>1.1 Cleanup-Ex</h4>

<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if($room_is_filthy == true){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room($room_is_filthy);
} else {
	echo "<br>Nothing to do, room is neat.";
}

function cleanup_room() {
    echo "<br>Room is now clean!";
    $room_is_filthy = false;
}
?>

<h4>1.2 Room Filth</h4>

<?php

    // 1.2 Clean your room Exercise, improved

// Create the array of possible states
// $possible_states = [];

// When testing, change the index value to navigate to the possible array values
$possible_states = array('abysmal', 'dreadful', 'live in filth', 'yolo', 'nope');
$room_filthiness = $possible_states[2]; 



if( $room_filthiness == $possible_states[0]){
	echo "Yuk, kill yourself !";
} else if( $room_filthiness == $possible_states[1] ){
	echo "Yuk, you should go in exile !";
}  else if( $room_filthiness == $possible_states[2] ){
	echo "Yuk, bury yourself !";
} else if( $room_filthiness == $possible_states[3] ){
	echo "Yuk, go away !";
} else if( $room_filthiness == $possible_states[4] ){
	echo "Yuk, DIE !";
}else {
	echo "<br>Nothing to do, room is neat.";
}

?>

<h4>2. Time of day</h4>

<?php

    // 2. "Different greetings according to time" Exercise

$now = date("H:i:s"); // How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.
if($now >= date("05:00") && $now <= date("09:00")){
    echo "Go back to bed";
} elseif ($now >= date("09:01:00") && $now <= date("12:00")) {
    echo "Still too early";
} elseif ($now >= date("12:01") && $now <= date("16:00")) {
    echo "Nope, i'm good in bed";
} elseif ($now >= date("16:01") && $now <= date("21:00")) {
    echo "WAKE UP, PUNK";
} else {
    echo "You might as well continue to sleep, right";
}
?>


<h4>3.-4.-5. Age Salutation</h4>

<!-- 
<form action="" method="GET">
<label for="age">Punkage:</label>
<input type="" name="age">
<label for="genre">HaPenis:</label>
<input type="radio" name="genre" value="miss">Miss
<input type="radio" name="genre" value="mister">Mr
<label for="language">Speak americano?</label>
<input type="radio" name="language" value="si">si
<input type="radio" name="language" value="non">non
<input type="submit" name="submit" value="Crunch"></form> -->

<?php

    if (isset($_GET["age"], $_GET["genre"], $_GET["language"]) && !empty ($_GET["age"]) && !empty($_GET["genre"]) && !empty($_GET["language"])) {
        $age = $_GET["age"];
        $genre = $_GET["genre"];
        $language = $_GET["language"];

        if ($age <= 12) {
            if ($genre == "miss") {
                if ($language == "si") {
                    echo "Hello little girl";
                } elseif ($language == "non") {
                    echo "Aloha little girl";
                }
                // echo "Hello little miss";
            } elseif ($genre == "mister") {
                if ($language == "si") {
                    echo "Hello little boy";
                } elseif ($language == "non") {
                    echo "Aloha little boy";
                }
                // echo "Helloooo little boy";
            }
            // echo "fuck off, kiddo";
        } elseif ($age >= 12 && $age <= 18) {
            if ($genre == "miss") {
                if ($language == "si") {
                    echo "Hello teen girl";
                } elseif ($language == "non") {
                    echo "Aloha teen girl";
                }
                // echo "Hello teenage girl";
            } elseif ($genre == "mister") {
                if ($language == "si") {
                    echo "Hello teen boy";
                } elseif ($language == "non") {
                    echo "Aloha teen boy";
                }
                // echo "Helloooo teenage boi";
            }
            // echo "hold my beer";
        } elseif ($age >= 18 && $age <= 35) {
            if ($genre == "miss") {
                if ($genre == "miss") {
                    if ($language == "si") {
                        echo "Hello adult girl";
                    } elseif ($language == "non") {
                        echo "Aloha adult girl";
                    }
                }
                // echo "Wassup grownup girl";
            } elseif ($genre == "mister") {
                if ($language == "si") {
                    echo "Hello adult boy";
                } elseif ($language == "non") {
                    echo "Aloha adult boy";
                }
                // echo "My man, looking good!";
            }
            // echo "pillow fight";
        } elseif ($age >= 35 && $age <= 100) {
            if ($genre == "miss") {
                if ($genre == "miss") {
                    if ($language == "si") {
                        echo "Hello old girl";
                    } elseif ($language == "non") {
                        echo "Aloha old girl";
                    }
                }
                // echo "Hello old plant";
            } elseif ($genre == "mister") {
                if ($language == "si") {
                    echo "Hello old boy";
                } elseif ($language == "non") {
                    echo "Aloha old boy";
                }
                // echo "Hello old stone";
            }
            // echo "jeez grandpa";
        } else {
            echo "Sensei.";
        }
    }
?>


<h4>6. Girl Soccer Team</h4>


    <form action="" method="GET">
    <label for="age">Age:</label>
    <input type="" name="age">
    <label for="genre">Genre:</label>
    <input type="radio" name="genre" value="female">♀
    <input type="radio" name="genre" value="male">♂
    <input type="submit" name="submit" value="Crunch">
    </form>

<?php

    if (isset($_GET["age"], $_GET["genre"]) && !empty($_GET["age"]) && !empty($_GET["genre"])) {
        $age = $_GET["age"];
        $genre = $_GET["genre"];

        if ($age >= 21 && $age <=40) {
            if ($genre == "female") {
                echo "Congrats, you're in";
            } else {
                echo "sorry";
            }
        }
    }
?>

<h4>9. Switch Structure</h4>

<form action="" method="GET">
<label for="grade">Grade=</label>
<input type="" name="grade">
<input type="submit" name="submit" value="yolo"></form>

<?php

if (isset ($_GET["grade"]) && !empty($_GET["grade"])) {
    $grade = $_GET["grade"];
    switch (true) {
        case ($grade < 4) : 
            echo "There's a shovel, dig your grave";
            break;
        case ($grade < 8) :
            echo "you should practice, in killing yourself";
            break;
        case ($grade == 10) :
            echo "just barely, just barely";
            break;
        case ($grade > 10) :
            echo "life will screw you, go away";
            break;
        default: 
            echo "lol";
    }
}
?>

<h4>10. Ternary operators</h4>

<?php
$age = 24;
$is_adult = ($age >= 18) ? true : false;

// $is_adult is true

$age = 24;
if ($age >= 18)
{
	$is_adult = true;
} else {
	$is_adult = false;
}
// $is_adult is true

?>


</body>
</html>