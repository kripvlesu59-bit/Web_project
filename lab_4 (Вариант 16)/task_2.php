<?php
$str = 'a1b2c3';

function calc($matches) {return $matches[0] + 50;}

echo(preg_replace_callback('/\d+/', "calc", $str));

?>