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
