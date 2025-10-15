<?php

function printStringReturnNumber() {
    echo "Каждый день я повторяю 42424242 \n";
    return 42424242;
}

$my_num = printStringReturnNumber();
echo $my_num;