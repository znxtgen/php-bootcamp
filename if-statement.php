<?php

if (false) {
    echo "stop!";
} else {
    echo "go!";
}

$articles = ["First", "Second", "Third"];

// var_dump(empty($articles));

if (empty($articles)) {
    echo "The array is empty";
} else {
    echo "There are stuff in this array";
}

echo "<br>";


// Comparison Operators

var_dump(4 == 4);
echo "<br>";
$age = 17;
if ($age < 18) {
    if ($age > 18) {
        echo "Allowed grown up stuff";
    } elseif ($age < 18) {
        echo "Under age, cannot pass";
    }
} else {
    echo "This is a grown up person";
}


// While loop
// Remember to change condition to false at the end
// increment inside the loop or the loop will never end.

echo "<br>";
$month = 1;

while ($month <= 12) {
    echo $month . ", ";
    $month = $month + 1;
}


// For loop
// Specific number of times (counter)

echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . ", ";
}


// Else if
// Allow to extend if statement if first condition is false

echo "<br>";
$hour = 19;
if ($hour < 12) {
    echo "Good morning";
} elseif ($hour < 18) {
    echo "Good afternoon";
} elseif ($hour < 22) {
    echo "Good evening";
} else {
    echo "Good night";
}


// Switch statement
echo "<br>";
$day = "";

switch ($day) {
    case "Mon":
        echo "Monday";
        break;
    case "Tue":
        echo "Tuesday";
        break;
    case "Wed":
        echo "Wednesday";
        break;
    case "Thu":
        echo "Thursday";
        break;
    case "Fri":
        echo "Friday";
        break;
    case "Sat":
        echo "Satday";
        break;
    case "Sun":
        echo "Sunday";
    default:
        echo "No data available for that day.";
        break;
}


// Challenge
echo "<br>";
$array = [];

for ($i = 1; $i <= 10; $i++) {

    if ($i < 4) {
        $array[$i] = "a";
    } elseif ($i >= 4 && $i <= 7) {
        $array[$i] = "b";
    } elseif ($i >= 8) {
        $array[$i] = "c";
    }
}

foreach ($array as $index => $value) {
    echo "<br/>$index = $value.";
}
