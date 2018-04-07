#!/usr/bin/env php
<?php
/*
Добавление элементов в массиве с начала, с конца
*/

$arr = ['a', 'b', 'c'];

array_unshift($arr, 0);
array_push($arr, 5);

print_R($arr);


