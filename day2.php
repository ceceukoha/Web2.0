<?php
// <div class=""></div>
    //Arithmetic Operators
    //+ - / * %


    //String Functions
    /*
    
    */

    $num = 22;
    $num +=2;
    $num .= "Hello";

    // echo $num;

    $smile = "78";
    $mine = 78;

    // $smile === $mine

    $content = "I am craving Sharwarma <br>"; //it begins counting from 0
    $string = "WHY YOU SO ANGRY?";
    echo $content.'<br>';
    echo strtoupper($content);
    echo strtoupper($content).'<br>';
    echo strtolower($content);
    echo strtolower($string).'<br>';
    echo ucwords($content).'<br>';//Cinverts all first letters
    echo ucfirst($content);//Converts only the first world

    echo strlen($content).'<br>'; //passes out the length of the string 
    echo strlen($content).'<br>'; //reverses the string
    echo strpos($content, 'craving').'<br>'; //gives the position of that value or letter in a string
    // echo str_shuffle($content).'<br>';//shuffles the characters in the string
    $string = ")!@#$%^&*(0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // echo str_shuffle($string)."<br>";
    $string = "07082308901";
    echo substr($string, 0,3)."*****".substr($string, 7, 10)."<br>";

    //INTEGER & STRING CONVERSIONS
    $string = "55" + 2;
    echo intval($string)."<br>";//Converts from String to integer
    echo strval($string);//Converts from Integer to String


?>