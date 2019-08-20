<?php

require dirname(__DIR__).'/src/Katas/Pyramid.php';

$pyramid = new \App\Katas\Pyramid(10, '*', '-');
$pyramid->show();