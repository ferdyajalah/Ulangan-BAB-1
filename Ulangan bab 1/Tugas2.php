<?php
class Motor{

public $name, $idmesin, $typemotor;

public function __construct($name,$idmesin,$typemotor)
{
    $this->name = $name;
    $this->idmesin = $idmesin;
    $this->typemotor = $typemotor;
}
}

$obj1 = new Motor("Vario", "1245", "automatic");

echo "Nama: " . $obj1->name . '<br>';
echo "ID Mesin: " . $obj1->idmesin . '<br>';
echo "Type Motor: " . $obj1->typemotor . '<br>';

$obj1 = new Motor("Cb 250", "3421", "sport");

echo "Nama: " . $obj1->name . '<br>';
echo "IDmesin: " . $obj1->idmesin . '<br>';
echo "Type Motor: " . $obj1->typemotor . '<br>';