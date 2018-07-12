<?php

/*
Types of Arrays:
- Indexed
- Associative
- Multi-dimentional
 */

// Indexed
$people = array('Brandon', 'David', 'Jayson');
$ids = array(23, 55, 22);
$cars = ['Honda', 'Toyota', 'Chevrolet'];
$carsCount = count($cars);

// echo "Car: $cars[0]";
// echo "Number of Cars: $carsCount";
// var_dump($cars);
// print_r($ids);
// print_r(['hello', 'guys']);

// echo = console.log
// var_dump = console.dir
// print_r = recursive echo of indexed items

// Associative - like JavaScript Objects
$newPeople = [
    'Brandon' => 30,
    'John' => 25,
];

$ids = array(
    22 => 'Brandon',
    30 => 'John',
);

// echo $ids[22];
// print_r($ids);

// Multi-dimentional
$newCars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
);

// print_r($newCars[0][0]);
