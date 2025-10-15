<?php

$a = 10;
$b = =3;



$ans_0 = $a % $b;
echo "$ans_0 \n";



if ($a % $b == 0) {
	echo "Делится: ", $a/$b, " (результат)\n";
}	
else {
	echo "Делится с остатком: ", $a % $b, " (остаток)\n";
}



$st = pow(2,10);
$sq = sqrt(245);

$array = [4, 2, 5, 19, 13, 0, 10];
$sq_sum = 0;
foreach ($array as $i) {
    $sq_sum += $i**2;
}
$ans_1 = sqrt($sq_sum);
echo "$ans_1 \n";



$sqrt_379 = sqrt(379);
$sqrt0 = round($sqrt_379);
$sqrt1 = round($sqrt_379, 1);
$sqrt2 = round($sqrt_379, 2);


$sqrt_587 = sqrt(587);
$array = ['floor' => floor($sqrt_587), 'ceil' => ceil($sqrt_587)];



$arr = [4, -2, 5, 19, -130, 0, 10];
$min_arr = min($arr);
$max_arr = max($arr);



echo rand(1, 100), "\n";

$arr1 = [];
for ($i = 0; $i < 10; $i++) {
    $arr1[$i] = rand(1, 100);
}



echo "Модуль разности между a и b: ", abs($a - $b);

$arr2 = [[1, 2, -1, -2, 3, -3, -124, -66, 342, -19];
foreach ($arr2 as $i) {
	$i = abs($i);
}



$number = 4242;
$arr_of_div = [];

for ($i = 1; $i <= number / 2 + 1; $i++) {
    if ($number % $i == 0) {
        $arr_of_div[] = $i;
    }
}
$arr_of_div[] = $number;



$arr3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;

for ($i = 0; $i < 10; $i++) {
    if ($sum > 10) {
        echo $i, "\n";
        break;
    }
    $sum += $arr3[$i];
}