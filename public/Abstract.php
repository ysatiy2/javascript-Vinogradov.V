<?php
abstract class Lays {
	private $name;
	private $price;

	public function __construct($name,$price) {
		$this->setName($name);
		$this->setPrice($price);
		$this->drive();
	}
	public function setName ($name){
		$this->name = $name;
	}
	public function setPrice ($price){
		$this->price = $price;
	}
	public function getName(){
		return $this->name;
	}
	public function getPrice(){
		return $this->price;
	}
	abstract function show();

	function drive(){
		echo " Lay's со вкусом: ".$this->name. " стоят: ". $this->price. $this->show(). "<hr>";
	}
}