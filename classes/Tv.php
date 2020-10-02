<?php
require_once 'Products.php';


class Tv extends Product {
  public $model;
  public $technology;

  public function __construct($_categoria, $_id, $_marca, $_prezzo, $_dimensioni, $_model, $_technology){
    parent::__construct($_categoria, $_id, $_marca, $_prezzo, $_dimensioni);
    $this->model = $_model;
    $this->technology = $_technology;
  }
}
