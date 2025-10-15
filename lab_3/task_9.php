<?php

$arr = [ ];
for ($i = 1; $i <= count($arr); $i++) {
    $arr[] = str_repeat("x", $i);
}
print_r($arr);

echo "\n";



function arrayFill($replace, int $counter) {
    $arr1 = [];
    for ($i = 0; $i < $counter; $i++) {
        $arr1[] = $replace;
    }
	
    return $arr1;
}



$arr_2dims = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($arr_2dims as $i) {
    $sum += array_sum($i);
}



$arr1_2dims = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
		$counter+=1;
        $arr1_2dims[$i][$j] = $counter;
    }
}



$arr2 = [2, 5, 3, 9];
$result = $arr2[0] * $arr2[1] + $arr2[2] * $arr2[3];
echo "Результат: $result\n";


$user = ["name" => "Philipp", "surname" => "Kirkorov", "patronymic" => "Bedrosovich"];
echo "The greatest singer in Russian scene: ", $user["surname"] . " ". $user["name"] . " " . $user["patronymic"]."\n";



$date = ["year" => "2042", "month" => "1", "day" => "42"];
echo "The greatest singer's concert date: ", $date["year"] . "-" . $date["month"] . "-" . $date["day"]."\n";



$arr3 = ['a', 'b', 'c', 'd', 'e'];
echo "Количество элементов: ", count($arr3),"\n";
echo "Последний элемент: ", $arr3[count($arr3) - 1], "\n";
echo "Предпоследний элемент: ", $arr3[count($arr3) - 2], "\n";