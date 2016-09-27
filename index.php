<?php

//use acacha\SayHello;

use HelloWorld\SayHello;
use Acacha\Hello\SayHello as SayHello2;

require __DIR__ . "/vendor/autoload.php";

$sayhello = new SayHello2();

echo $sayhello->world();

echo \HelloWorld\SayHello::world();

$sayhello1 = new SayHello();

echo $sayhello1->world();

echo SayHello::world();

//== Namespace ==