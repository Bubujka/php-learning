#!/usr/bin/env php
<?php
/*
Объединить 2 словаря
*/

$arr = ['name'=>'zuzujka', 'age'=>28];
$arr2 = ['name'=>'bubujka', 'gender'=>'catfish'];

print_r(array_merge($arr, $arr2));
