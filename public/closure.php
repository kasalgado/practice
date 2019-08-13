<?php

$myName = function($name) {
    return $name;
};

var_dump($myName('KAS'));

$numberPlusOne = array_map(function($number) {
    return $number + 1;
}, [1, 2, 3]);

var_dump($numberPlusOne);