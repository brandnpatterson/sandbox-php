<?php

/*
Types of Loops
- For
- Whilte
- Do While
- ForEach
 */

// For Loop
// for ($i = 0; $i < 10; $i++) {
//     echo "Number is $i";
//     echo "<br />";
// }

// While Loop
// $i = 0;

// while ($i < 10) {
//     echo "$i <br />";
//     $i++;
// }

// Do While Loop
// $i = 0;

// do {
//     $indexPlusOne = $i + 1;

//     echo "$indexPlusOne <br />";
//     $i++;
// } while ($i < 10);

// ForEach Loop
$people = array('Brandon', 'Lauren', 'Amber');

// foreach ($people as $key => $value) {
//     $keyPlusOne = $key + 1;

//     echo "$keyPlusOne: $value <br />";
// }

// $peopleAndEmails = array(
//     'Brandon' => 'brandnpatterson@gmail.com',
//     'Lauren' => 'laurnpatterson@gmail.com',
//     'Amber' => 'ambrpatterson@gmail.com',
// );

$peopleAndEmails = [
    [
        'name' => 'Brandon',
        'email' => 'brandnpatterson@gmail.com',
    ],
    [
        'name' => 'Lauren',
        'email' => 'laurnpatterson@gmail.com',
    ],
    [
        'name' => 'Amber',
        'email' => 'ambrpatterson@gmail.com',
    ],
];

foreach ($peopleAndEmails as $i) {
    echo "{$i['name']} {$i['email']} <br />";
}

$a = array(
    'blue' => 'nice',
    'car' => 'fast',
    'number' => 'none',
);

// echo array_search('car', array_keys($a));
?>
<script type="text/javascript">

    var peopleAndEmails = [
        {
            'name' : 'Brandon',
            'email' : 'brandnpatterson@gmail.com',
        },
        {
            'name' : 'Lauren',
            'email' : 'laurnpatterson@gmail.com',
        },
        {
            'name' : 'Amber',
            'email' : 'ambrpatterson@gmail.com',
        },
    ];

    peopleAndEmails.map(person => {
        console.log(`${person.name} ${person.email}`);
    });
</script>
