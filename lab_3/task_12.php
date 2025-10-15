<?php

$arr = [3, 6, 12, 21, 42, 84, 168, 336];
$mean = array_sum($arr) / count($arr);
echo "Среднее арифметическое массива: $mean\n";



$n = 100;
$sum = $n * ($n + 1) / 2;

echo "Сумма чисел от 1 до 100: ",  $sum;



$arr1 = [42, 52, 62, 72, 82];
$arr_sqrt = array_map("sqrt", $arr1);
print_r($arr_sqrt);



$arr_key = range("a", "z");
$arr_val= range(1, 26);
$arr_alphabet = array_combine($arr_key, $arr_val);
print_r($arr_alphabet);



$s= "1234567890";
$divided = str_split($s, 2);
$sum = array_sum($divided);