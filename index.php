<?php
include_once("Person.php");
include_once("Witch.php");

$person_1 = new Person();
$person_1->setBorn(10);
$witch = new Witch();
$witch->setYear(3);
print_r($witch->kill());