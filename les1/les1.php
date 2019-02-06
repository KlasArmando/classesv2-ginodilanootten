<?php
/**
 * Created by PhpStorm.
 * User: Gino
 * Date: 5-2-2019
 * Time: 12:37
 */

Class Person {
    public $name;
    public $age;

}

$persoon1 = new Person();
$persoon1->name = "Henk";
$persoon1->age  = "22";


var_dump($persoon1);

$persoon2 = new Person();
$persoon2->name = "Piet";
$persoon2->age = "18";

var_dump($persoon2);