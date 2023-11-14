<?php

// String variable declaration
$name = "Tehaunui";
$message = "Nice to meet you!";

// Interger variable declaration
$year = 2023;
$price = 1.89;

// Display a string with concatenation
echo "Hello " . $name . ". " . $message  . "<br/>" . " It's " . $year . " and my bus trip costs " . $price . " dollars." . "<br/>";

var_dump($message);
var_dump($price);

echo "<br/>";

$is_admin = true;
$data = null;

var_dump($is_admin, $data);

$is_editor = true;

echo "<br/>";

var_dump(!$is_editor);

echo "<br/>{" . "Hello {$name}" . "} is a variable interpolation";
