<?php
//API1: Implement a GET API that takes a string and returns a json object stating if that string is a palindrome or not.
    $str = $_GET["string"];

    if (strrev($str) == $str) {
        $palindrome = "True";
    } else {
        $palindrome = "False";
    };

    $results = [
        "palindrome" => $palindrome,
    ];

    echo json_encode($results);
?>

