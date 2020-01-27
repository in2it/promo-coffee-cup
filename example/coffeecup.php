<?php

include_once __DIR__ . '/../vendor/autoload.php';

$coffee = new \In2it\Drinks\Coffee();
while (! $coffee->isEmpty()) {
    $coffee->drink();
}
$coffee->refill();
