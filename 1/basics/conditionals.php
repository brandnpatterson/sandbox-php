<?php

// $num = 10;

// if ($num > 5 and $num < 11) {
//     echo $num;
// }

function getFavColor($favColor)
{
    switch ($favColor) {
        case 'red':
            return 'Your favorite color is red';
        case 'green':
            return 'Your favorite color is green';
        case 'blue':
            return 'Your favorite color is blue';
        case 'yellow':
            return 'Your favorite color is yellow';
        default:
            return 'Your favorite color is something else';
    }
}

// echo getFavColor('blue');
