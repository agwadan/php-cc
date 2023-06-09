<?php
$name = 'Jane';
$age = 32;
$a = 20;
$b = 50;

echo $name . 'is' . $age . 'years old ';
echo " ${name}  is  ${age} years old";
echo $a - $b;

//Const
define('HOST', '43');
define('DB_NAME', 'dev_db');

echo HOST;
echo DB_NAME;