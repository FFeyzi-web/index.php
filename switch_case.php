<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$fruitName = "qarpiz";

// switch ($fruitName) {

//     case "alma":
//         echo "beli duzgun meyveni tapdiniz: $fruitName";
//     break;

//     case "armud":
//          echo "beli duzgun meyveni tapdiniz: $fruitName";
//     break;

//     case "heyva":
//          echo "beli duzgun meyveni tapdiniz: $fruitName";
//     break;

//     default :
//          echo "bele bir meyve movcud deyil";
//     break;

// }

for ($i = 0; $i < 15; $i++) {
 
    if ($i == 5) {
        break;
    }

    echo "$i <br>";

}



?>

</body>
</html>