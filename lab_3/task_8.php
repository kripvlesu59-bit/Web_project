<?php

function increaseEnthusiasm(string $s) {
	return $str."!\n";
}

echo increaseEnthusiasm("nuzhno_bolshe_zolota"), "\n";



repeatThreeTimes(string $s) {
	return $str.$str.$str;
}

echo repeatThreeTimes("baby"), "\n";
echo "ooh, like \n";


echo increaseEnthusiasm(repeatThreeTimes("Ra")), "\n";


function cut(string $s, int $len = 10) {
    return substr($s, 0, $len);
}


function arr_printer($arr, $i = 0) {
	
    if ($i >= count($arr)) {
        return;
    }

    echo $arr[$i] , " ";
    arr_printer($arr, $i+ 1);
}

$numbers = [1, 2, 3, 4, 5];
arr_printer($numbers);


function To_Single($n) {
	
	$sum = array_sum(str_split((string)$n));
    
    if ($sum > 9) {
        return To_Single($sum);
    }

    return $sum;
}