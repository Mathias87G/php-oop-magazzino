<?php
require_once 'classes/Tv.php';
require_once 'classes/Monitor.php';


$Tv1 = new Tv('TV', '147852', 'Samsung', '499', "42'", 'Tizen', 'LED');
$Tv2 = new Tv('TV', '147853', 'Sony', '1499', "50'", 'Bravia', 'LCD');
$Tv3 = new Tv('TV', '147854', 'LG', '799', "50'", 'Webos', '4K');
$Tv4 = new Tv('TV', '147855', 'Telefunken', '99', "21'", '', '');
$Monitor1 = new Monitor('Monitor', '147866', 'Asus', '149', "17'", false, true );
$Monitor2 = new Monitor('Monitor', '147867', 'Acer', '89', "23'", false, false );
$Monitor3 = new Product('Monitor', '147868', 'Philips', '219', "25'", true, true );
$Monitor4 = new Monitor('Monitor', '147869', 'LG', '299', "30'", true, true );
$TvArray = [$Tv1,$Tv2,$Tv3,$Tv4];
$MonitorArray = [$Monitor1,$Monitor2,$Monitor3,$Monitor4];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach($TvArray as $Tv) { ?>
      <h3><?php echo $Tv->marca . ' ' . $Tv->model ?></h3>
      <h4><?php echo $Tv->prezzo ?>€</h4>
    <?php } ?>
    <?php foreach($MonitorArray as $Monitor) { ?>
      <h3><?php echo $Monitor->marca . ' ' . $Monitor->dimensioni ?></h3>
      <h4><?php echo $Monitor->prezzo ?>€</h4>
    <?php } ?>
  </body>
</html>
