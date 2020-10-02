<?php
// require_once 'classes/Tv.php';
require_once 'classes/Tv.php';

$Tv1 = new Tv('TV', '147852', 'Samsung', '499', "42'", 'Tizen', 'LED');
$Tv2 = new Product('TV', '147853', 'Sony', '1499', "50'", 'Bravia', 'LCD');
$Tv3 = new Tv('TV', '147854', 'LG', '799', "50'", 'Webos', '4K');
$Tv4 = new Product('TV', '147855', 'Telefunken', '99', "21'", 'Pippa', 'A pedali');

var_dump($Tv1, $Tv2,$Tv3, $Tv4);
