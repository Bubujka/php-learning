#!/usr/bin/env php
<?php
/*
Получить значение из словаря, если его нет - не падать
*/

$arr = ['name'=>'bubujka', 'age'=>28];

echo $arr['sex'] ?? 'male';



