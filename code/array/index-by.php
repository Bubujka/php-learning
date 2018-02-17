#!/usr/bin/env php
<?php
/*
Индексировать массив
*/
$arr = [ 'bubujka', 'zuzujka', 'bubuzka', 'jujujka'];
$r = [];
foreach($arr as $v){
    $r[$v{0}] = $v;
}
print_r($r);

