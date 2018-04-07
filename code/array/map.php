#!/usr/bin/env php
<?php
/*
Преобразовать один массив в другой
*/

$arr = [1,2,3];

$arr2 = array_map(function($v){ return $v*$v; }, $arr);
print_R($arr2);
