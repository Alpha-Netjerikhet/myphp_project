<?php

class Person {
	public $name;
	public $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
		echo 'Constructed<br>';
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	public function getAge() {
		return $this->age;
	}

	public function setAge($age) {
		$this->age = $age;

		return $this;
	}

	public function printDetails() {
		return $this->name . ' is ' . $this->age . ' years old.<br>';
	}
}
?>