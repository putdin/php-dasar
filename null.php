<?php

$name = "fudin";
$name = null;

$age = null;

echo "Nama : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "fudin";
unset($contoh);

$contoh = "saifuddin";
$contoh = null;

var_dump(isset($contoh));
