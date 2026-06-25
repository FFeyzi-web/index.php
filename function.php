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

//oxlu funksiyalar

// $x = 9;
// $topla = fn (&$a)  => $a = 10  ;


// echo $topla ($x) ."<br>";

// echo $x;

//return

// function topla ($eded1, $eded2) {

//     return $eded1 + $eded2;

// }

// function vurma () {

//     return topla(5, 7) * topla(3, 4);

// }

// echo vurma (4, 7);




//factorial
// function faktorial($n) {

//     if ($n === 0) {
//         return 1;
//     } else {
//         return $n * faktorial($n - 1);
//     }

// }

// echo faktorial(5);


// function sum(&$a) {

//     $a = $a + 10;

//     return $a;

// }

// $b = 10;

// echo sum($b) . "<br>";
// echo $b;


//splat operatoru  ...

//  ...$item

// function outArguments  (...$item)  {

//     print_r ($item);


// }

// outArguments ('php' , 'html');

// function outArguments  (...$item)  {

//      foreach ($items as item)


//  }

// outArguments ('php' , 'html');
?>




</body>
</html>