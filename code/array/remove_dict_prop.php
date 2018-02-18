#!/usr/bin/env php
<?php
/*
Удалить свойство из объекта
*/

$arr = ['name'=>'bubujka', 'age'=>28];
unset($arr['name']);
print_r($arr);

