#!/usr/bin/env php
<?php
/*
Изменить права на файл
*/

system('ls -l _tmp');

chmod('_tmp/hello.txt', 0777);

system('ls -l _tmp');
chmod('_tmp/hello.txt', 0644);
