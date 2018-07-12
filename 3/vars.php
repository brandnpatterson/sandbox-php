<?php

function toHtml($string)
{
    return htmlentities($string);
}

$name = false;
$email = false;

if (isset($_GET['name'])) {
    $name = toHtml($_GET['name']);
}
if (isset($_GET['email'])) {
    $email = toHtml($_GET['email']);
}
