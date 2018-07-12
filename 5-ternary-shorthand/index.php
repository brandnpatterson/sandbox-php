<?php

$loggedIn = true;
$arr = [1, 2, 3, 4];

// if ($loggedIn) {
//     echo 'You are logged in';
// } else {
//     echo 'You are not logged in';
// }

// echo $loggedIn ? 'You are logged in' : 'You are not logged in';

$isRegistered = ($loggedIn == true) ? true : false;

?>
<div>
    <?php if ($loggedIn): ?>
       <h2>Welcome User</h2>
    <?php else: ?>
        <h2>Welcome Guest</h2>
    <?php endif;?>
</div>
<div>
    <?php foreach ($arr as $val): ?>
        <?=$val;?>
    <?php endforeach;?>
</div>
