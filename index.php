<?php
require "src/functions.php";

echo 'task1';
echo '<hr>';
$arr = ['a', 'b', 'v', 'g', 'd'];
task1($arr);
echo task1($arr, true);


echo '<hr>';
echo 'task2';
echo '<hr>';
task2('+', [1,2,3,4,5]);
task2('-', [1,2,3,4,5]);
task2('*', [1,2,3,4,5]);
task2('/', [1,2,3,4,5]);

echo '<hr>';
echo 'task3';
echo '<hr>';

task3(4,4);
task3(4,3);
task3(-4,-4);
task3(8,8);

echo '<hr>';
echo 'task4';
echo '<hr>';
task4();

echo '<hr>';
echo 'task5';
echo '<hr>';
task5();

echo '<hr>';
echo 'task6';
echo '<hr>';
$fileName = 'test.txt';
task6('Hello again!', $fileName);
fileOpen($fileName);

