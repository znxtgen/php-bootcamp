<?php

// Associative array sample
$articles = [
    "first" => "My first",
    "second" => "comment is",
    "third" => "ready to show!"
];

var_dump($articles["second"]);
echo "<br/>";

// Indexes can be INT or STRING like below
$level = 3;
$price = 8.99;

$values = [
    "message" => "Hello you",
    "count" => 35,
    "pi" => 3.14,
    "status" => false,
    "result" => null,
];

var_dump($values);
echo "<br/>";

$new_values = [
    $price,
    $level,
];

var_dump($new_values);
echo "<br/>";

// Multidimensional arrays
$newspaper = [
    [
        "title" => "Premier post",
        "content" => "This is the first post",
    ],
    [
        "title" => "Another post",
        "content" => "Read this new post",
    ],
    [
        "title" => "Read me!",
        "content" => "You must read this article!",
    ],
];

var_dump($newspaper[1]["title"]);
