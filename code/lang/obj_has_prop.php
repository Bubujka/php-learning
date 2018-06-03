#!/usr/bin/env php
<?php
/*
Проверить что у объекта есть свойство
*/

class Person{
    public $name;
    private $password;

    function __construct($name, $pass){
        $this->name = $name;
        $this->password = $pass;
    }
}

$me = new Person('bubujka', 'qwerty');

var_dump(isset($me->name));
var_dump(isset($me->password));
var_dump(isset($me->age));


