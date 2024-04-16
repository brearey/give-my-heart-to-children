<?php
require 'connect.php';
$person1 = R::load('persons', 1);
$person2 = R::load('persons', 2);
$person3 = R::load('persons', 3);
$person4 = R::load('persons', 4);
$person5 = R::load('persons', 5);
$person6 = R::load('persons', 6);
$person1->name = NULL;
$person2->name = NULL;
$person3->name = NULL;
$person4->name = NULL;
$person5->name = NULL;
$person6->name = NULL;
R::store($person1);
R::store($person2);
R::store($person3);
R::store($person4);
R::store($person5);
R::store($person6);
?>