<?php

// Foreach loop declaration with manual array indexation

$articles = [
    'a' => "First article",
    'b' => "Second article",
    'c' => "Third article"
];

foreach ($articles as $index => $article) {
    echo "<br/> $index - $article" . ", ";
}


/*
Challenge - Arrays

Create a variable called array that contains an array with three simple values.
These values can be whatever you like.
Explicitly assign the string index of "third" to the third element.
Write a foreach  loop that contains the following statement to print out
each element of the array, along with its index:
echo "$index = $value."; 
*/

$array = ["Amy", "Steven", "third" => "Gary"];

foreach ($array as $index => $value) {
    echo "<br/>$index = $value.";
}
