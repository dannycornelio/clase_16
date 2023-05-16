<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function dividir(int $numero1, int $numero2) : void {
    echo $numero1 / $numero2;

    try {
        echo dividir(10,0);
    }catch(Exception $exception){
        echo $exception->getMessage();
    }
// function dividir(int $numero1, int $numero2) : float {
//     return $numero1 / $numero2;
}
 echo "<br>";
 echo "Todo funciono bien";




?>