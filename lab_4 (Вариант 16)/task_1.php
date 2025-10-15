<?php
$str = 'popa pipa dua lipa nigga';
preg_match_all('/p.p/', $str, $matches);
print_r($matches[0]);

?>