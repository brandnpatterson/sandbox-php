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

?>
<script type="text/javascript">
    // var people = new Array('Brandon', 'David', 'Jayson');
    // var cars = ['Honda', 'Toyota', 'Chevrolet'];

    // console.dir(people);
</script>
<?php
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
// $newCars = array(
//     array('Honda', 20, 10),
//     array('Toyota', 30, 20),
// );

$newCars = [
    [
        'name' => 'Honda',
        'id' => 30,
        'number' => 10,
    ],
    [
        'name' => 'Toyota',
        'id' => 30,
        'number' => 10,
    ],
];

print_r($newCars[0]['name']);
?>
<script type="text/javascript">

    // var newCars = new Array(
    //     new Array('Honda', 20, 10),
    //     new Array('Toyota', 30, 20)
    // );

    // var newCars = [
    //     ['Honda', 20, 10],
    //     ['Toyota', 30, 10]
    // ];

    var newCars = [
        {
            make: 'Honda',
            id: 20,
            number: 10
        },
        {
            make: 'Toyota',
            id: 20,
            number: 10
        },
    ]

    console.log(newCars[0].make);

</script>
