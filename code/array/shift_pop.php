#!/usr/bin/env php
<?php
/*
Вытаскивание элементов в массиве с начала, с конца
*/

$arr = [0, 'a', 'b', 'c', 5];

echo array_shift($arr);
echo array_pop($arr);

print_R($arr);


