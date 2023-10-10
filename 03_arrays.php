<?php
//Simple Arrays
$numbers = [1, 44, 55];
$fruits = array("apple", "orange", "pear");

// print_r($numbers);

// var_dump($fruits);
// echo $fruits[1];

// Associative Array
$colors = [
    1 => "red",
    4 => "blue",
    6 => "turquoise",
];

// echo $colors[4];

$person = [
    "first_name" => "Valentine",
    "last_name" => " Santos",
];

// echo $person["first_name"];

$people = [
    [
        "first_name" => "Valentine",
        "last_name" => " Santos",
    ],
    [
        "first_name" => "Valentine",
        "last_name" => " Caleb",
    ],
    [
        "first_name" => "Valentine",
        "last_name" => " James",
    ]
];

// echo $people[1]["last_name"];

// var_dump(json_encode($people));
