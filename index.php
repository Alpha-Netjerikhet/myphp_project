<?php

require 'Person.php';
require 'Bird.php';
require 'Pigeon.php';
require 'Penguin.php';

$person = new Person('Ash2', 22);

echo $person->printDetails();
$person->setName('Ash3');
echo $person->printDetails();

$bird1 = new Bird(true, 2);

echo $bird1->getLegCount();

if ($bird1->canFly()) {
	echo 'can fly';
} else {
	echo 'can\'t fly';
}

$pigeon1 = new Pigeon(true, 2);
echo '<br><b>Pigeon1</b><br>';
echo $pigeon1->getLegCount();
if ($pigeon1->canFly()) {
	echo 'Pigeon1 can fly<br>';
}

$penguin1 = new Penguin(false, 2);
echo '<br><b>Penguin1</b><br>';
echo $penguin1->getLegCount();
if ($penguin1->canFly()) {
	echo 'Penguin1 can fly<br>';
} else {
	echo 'Penguin1 can\'t fly<br>';
}

?>


