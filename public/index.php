<?php
require __DIR__ . '/vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();
echo $hello;

$helloWorld = new SayHello();
echo $helloWorld;