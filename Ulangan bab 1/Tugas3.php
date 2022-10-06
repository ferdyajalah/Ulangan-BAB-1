<?php
trait role {
abstract public function getRole():string;
}
class SuperClass {
public $name;
public $level;
public static $index;
public $is_status;

public function __construct($name,$level, $is_status = "easy")
{
$this->name = $name;
$this->level = $level;
self::$index = 1;
$this->is_status = $is_status;
}

public function getName(){
return $this->name;
}

public function getStatus(){
return $this->is_status;
}

public function getLevel(){
return $this->level;
}

public function display()
{
echo "No " . self::$index++ . "<br>";
echo "Name: " . $this->getName() . "<br>";
echo "Level: " . $this->getLevel() . "<br>";
if($this->is_status == "easy"){
echo "Status: " . $this->getStatus() . "<br>";
$this->space() . "<br>";
}else{
echo "Status: " . $this->getStatus() . "<br>";
}



}
public function space()
{
echo "<hr>";
}
}

class SubClass extends SuperClass {
use Role;

public $role;

public function __construct($name, $level, $is_active, $type = "1", $role = "Siswa")
{
parent::__construct($name, $level, $is_active );
$this->name = $name;
$this->level = $level;
$this->type = $type;
$this->is_active = $is_active;
$this->role = $role;
}

public function getAllDisplay()
{
$this->display() . "<hr>";
echo "Jabatan: " . $this->getRole();
}

public function getRole(): string{
return $this->role;
}
}

$SuperClass = new Superclass ("SuperClass", 30, "UnderRated");


$SubClass = new SubClass("SubClass", 19, "EZ");



echo $SuperClass->display();


echo $SubClass->getAllDisplay();