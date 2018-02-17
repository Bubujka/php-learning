#!/usr/bin/env php
<?php
/*
Отсортировать по функции сравнения
*/

$itms = [5,2,7,8,6,15];

usort($itms, function($a, $b){
    if($a == 15){
        return -1;
    }
    if($a == $b){
        return 0;
    }
    return ($a < $b) ? -1 : 1;
});

var_dump($itms);

