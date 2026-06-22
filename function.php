<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

//GLOBALS

// $x = 10;
// $y = 20;

// function topla () {

//     echo $GLOBALS['x'] + $GLOBALS['y'] . "<br>" ;

    

// }

// topla();

// // echo "<pre>";
// // print_r($GLOBALS);
// // echo "</pre>";


//GLOBALLA USE ARASINDA FERG ODURKI GLOBAL ANONIM FUNKSIYALARDA ISTIFADE OLUNUR USE SADE FUNKSIYALARDA


//anonim funksiyalar - closure
// & - referalnaya ssilka
// $factor = 3;

// $topla = function ($a) use (&$factor) {

//     $factor = 7;
//     echo $a * $factor . "<br>";

// };

// $topla(4);

// echo $factor;



// php 7.4 - fn 'acar sozu'

$topla = fn ($a)  => $a * 2 . "<br>";


echo $topla (4);





?>




</body>
</html>