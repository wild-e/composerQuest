<?php
require '../vendor/autoload.php';

$sayHello = new \App\Wcs\Hello();
echo $sayHello->talk();