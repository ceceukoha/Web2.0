<?php


    /* 

    */

    //echo is only for strings. We print out Arrays.
    $students = array("Nneoma","Chioma","Ifeoma",3 , false);

    print_r($students);
    echo "<br>";

    //We can change a particular info in the array
    echo $students[4] = "Obioma";
    print_r($students)."<br>";
    echo "<br>";

    $boxOffice= array(
        "movieTitle" => "See",
        "yearOfRelease" => 2021,
        "genre" => array("action","war"),
        "casts" => array(
            "leadRole" => "Jason Mamoa",
            "warrior" => "John Cena",
            "wife" => "Lily Collins"
        )
    );

    $new = $boxOffice["casts"];
    echo $new["warrior"]."<br>";
        print_r($boxOffice["yearOfRelease"]);


    echo "<br>";

    //To change the index values

    //To retrieve a single value


    $newArray = array("Mike","Jon");
    print_r($newArray);
    echo "<br>";
    
    // Pop is Used to remove a value from the array. Usually at the end
    array_pop($newArray);
    print_r($newArray);
    echo "<br>";

    //Push is Used to add a value at the end of the array
    array_push($newArray, "Chima"); 
    print_r($newArray);
    echo "<br>";

    //Shift
    array_shift($newArray);
    print_r($newArray);
    echo "<br>";

    //Unshift 
    array_unshift($newArray,"Kelechi");
    print_r($newArray);
    echo "<br>";

    $newArray = array(10,11,12,13,14,15,21,17);
    //echos out the maximum value in the array
    echo max($newArray)."<br>";

    //echos out the maximum value in the array
    echo min($newArray)."<br>";

    $newArray = array("Nneoma","Chioma","Ify","Judy");

    //Arranges values in the array in Descending order
    rsort($newArray); 
    print_r($newArray);
    echo "<br>";

    //Ascending order
    sort($newArray); 
    print_r($newArray);
    echo "<br>";

    //in_array Checks if a value exists inside a haystack
    echo in_array("Chioma", $newArray); //Returns a boolean value
    echo "<br>";


    //Converts the array to a string. Take two values
    $newArray = implode(", ", $newArray);
    echo $newArray;
    echo "<br>";

    //Converts String To Array
    $newArray = explode("-", $newArray);
    print_r($newArray);

    if (in_array("ify", $newArray)) {
        echo "This is true"
    }
    elseif(in_array("Ify")){
        echo "This is the 2nd"
    }
    else{
        echo "This is false"
    };
?>