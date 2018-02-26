#!/usr/bin/env php
<?php
/*
Удалить файл
*/

touch('_tmp/DELETE-ME');

print_r(glob('_tmp/*'));

unlink('_tmp/DELETE-ME');

print_r(glob('_tmp/*'));
