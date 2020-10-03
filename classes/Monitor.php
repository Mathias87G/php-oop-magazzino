<?php
require_once 'Products.php';


class Monitor extends Product {
  public $hdmi;
  public $gaming;

  public function __construct($_categoria, $_id, $_marca, $_prezzo, $_dimensioni, $_hdmi, $_gaming){
    parent::__construct($_categoria, $_id, $_marca, $_prezzo, $_dimensioni);
    $this->hdmi = $_hdmi;
    $this->gaming = $_gaming;
  }
}
