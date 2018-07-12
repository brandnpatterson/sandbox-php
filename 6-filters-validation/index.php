<?php

$self = $_SERVER['PHP_SELF'];

// if (filter_has_var(INPUT_POST, 'data')) {
//     echo 'Data found';
// } else {
//     echo 'Submit form to find data';
// }

if (filter_has_var(INPUT_POST, 'data')) {
    $email = $_POST['data'];

    // Remove illegal characters
    $filtered = filter_var($email, FILTER_SANITIZE_EMAIL);

    $validate = filter_var($filtered, FILTER_VALIDATE_EMAIL);

    echo $validate ? 'Email is valid' : 'Email is invalid';

} else {
    echo 'Submit form to find data';
}

?>

<form method="post" action="<?=$self?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>
