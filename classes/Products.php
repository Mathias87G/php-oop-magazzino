<?php

class Product {
  public $categoria;
  public $id;
  public $marca;
  public $prezzo;
  public $dimensioni;

  public function __construct($_categoria, $_id, $_marca, $_prezzo, $_dimensioni){
    $this->categoria = $_categoria;
    $this->id = $_id;
    $this->marca = $_marca;
    $this->prezzo = $_prezzo;
    $this->dimensioni = $_dimensioni;
  }
}
