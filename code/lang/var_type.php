#!/usr/bin/env php
<?php
/*
Получить тип переменной
*/
class Person{}
var_dump( gettype('string') );
var_dump( gettype(12) );
var_dump( gettype(new Person) );


