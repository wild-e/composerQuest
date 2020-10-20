<?php
require '../vendor/autoload.php';

// // quête 1
// $sayHello = new \App\Wcs\Hello();
// echo $sayHello->talk();

use App\Wcs\Hello;
echo Hello::talk();
echo "<br/>";

// quête 2
use HelloWorld\SayHello;
echo SayHello::world();