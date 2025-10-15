<?php

function Sum_Great($number1, $number2) {
	return ($number1 + $number2) > 10;
}



function Equality($number1, $number2) {
	return $number1 == $number2;
}



$test = 42;
echo $test == 0 ? "верно" : "";

echo "\n";



$age = 42;
if ($age < 10 || $age > 99) {
    echo "Возраст вне диапазона [10;99] лет\n";
}
else {
    $sum = array_sum(str_split((string)$age));
    if ($sum <= 9) {
        echo "Однозначна: $sum\n";
    }
	else {
        echo "Двузначна: $sum\n";
    }
}



$arr = [42, 84, 126, 168, 210]; 

if (count($arr) == 3) {
    echo "Сумма элементов: " . array_sum($arr), "\n";
}
else {
    echo "Массив содержит не три элемента", "\n";
}