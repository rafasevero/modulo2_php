<?php

$a = "teste";
$b = 12.8;

if (is_float($a)){//checando float
    echo "é float!\n";
}
if(is_float($b)){
    echo "é float!\n";
}
if(is_float(6565.63)){
    echo "é float 3!\n";
}
if(is_float("teste")){
    echo "é float 4!\n";
}


?>