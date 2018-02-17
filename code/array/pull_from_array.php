#!/usr/bin/env php
<?php
/*
Удалить значение из массива
*/

$arr = [1,2,3,4,5];
unset($arr[3]);
print_R($arr);

