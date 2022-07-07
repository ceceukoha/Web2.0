<?php

    /*
    Loops
    1. For
    2. While
    3. ForEach Loop
    */

        //For Loop
    $months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
    // for($i = 0; $i < count($months); $i++) {
    //     echo $months[$i].'<br>';
    // }

    //While Loop
    $num = 0;
    while($num < count($months)) {
        echo $months[$num++]. '<br>';
    }

    //ForEach Loop >>>>> Only on Arrays

    foreach($months as $index => $value) {
        echo $index.'   '.$value."<br>";
    }

    //Custom Functions
    function greet(){
        $months =  array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
        $months = implode($months);
        return $months;
        //define is used for constants
        // define('pi', 3.142);
        // define('r',6);
        // $ar = pi * r;
        // return $ar;
    }
    // print_r (greet());
    // print_r greet();
        //SUPERGLOBAL VARIABLE
    // $name = $_GET['fullName'];
    // $email = $_GET['email'];
    // $pass = $_GET['pass'];

    // print_r ($_GET);
    echo $name = $_POST['fullName'];
    echo $email = $_POST['email'];
    echo $pass = $_POST['pass'];
?>