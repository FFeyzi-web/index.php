<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php


    //  echo"bir " , "iki " , "uc ";

    // var_dump ("Salam Artyom")

    // $name = 'Artyom';
    // $surname = 'Mammadov';

    // echo 'Menim adim $name, soyadim $surname'

    // $deyerler = [
    //     'meyve1'=> 'alma', 
    //     'meyve2'=>'armud', 
    //     'meyve3'=>'heyva',
    //     'meyve4'=>'nar', 
    //     'meyve5'=>'gavali'];
    // echo "<pre>";
    //   print_r($deyerler['meyve1']);
    // echo "<pre>";

    // printf("Salam menim adim %s . Menim %d yasim var." ,"Artyom" , 20);

    // file_put_contents("test.txt", "Salam artyom")

    // $name = "Artyom ";
    // $age = 20;
    // $isActive = true;
    // $balance = 100.50;
    // $x = null ;

    // $a = $b = $c = $d = 10;

    // const PI = 3.14;
    // echo PI ;

    // PI = 3.15; 



    // class Car {

    // }



    // $bir = 'Artyom';
    
    // echo "Salam $bir \n menim yasim"; OLMADI

    // $a = 10 ;
    // $b = 'Artyom';
    // $c = null;
    // $d = [];
    // $f = true;

    // echo gettype($a) . "<br>"; //integer
    // echo gettype($b) . "<br>"; //string
    // echo gettype($c) . "<br>"; //NULL
    // echo gettype($d) . "<br>"; //array
    // echo gettype($f) . "<br>"; //boolean


    // $a = "6";
    // $b = 6;

    //  $c = $a == $b; // true
    //  $d = $a ===$b; //false


    // +
    // -
    // *
    // /
    // %

    // $a = 10;
    // $b = 5;
    // $c = $a + $b ;

    // echo "<h1>Toplama: $c</h1>";
    // echo "<h1>Cikarma:" . ($a - $b) . "</h1>";
    // echo "<h1>Carpma:" . ($a * $b) . "</h1>";
    // echo "<h1>Bolme:" . ($a / $b) . "</h1>";
    // echo "<h1>Modul:" . ($a % $b) . "</h1>";


    // <
    // >
    // <=
    // >=
    // ==
    // !=
    // <>
    // ===
    // !==
    // <==>

    // echo 5 > 3; //true
    // echo "<br>" ;

    // echo 5 < 3; //false
    // echo "<br>" ;

    // echo 5 >= 3; //true
    // echo "<br>" ;

    // echo 5 <= 3; //false
    // echo "<br>" ;

    // echo 5 == 5; //true
    // echo "<br>" ;

    // echo 5 != 5; //false
    // echo "<br>" ;

    // echo 5 === 5; //true
    // echo "<br>" ;

    // echo 5 !== 5; //false
    // echo "<br>" ;

    // echo 5 <> 5; //false
    // echo "<br>" ;

    // echo 5 <=> 3; //1
    // echo "<br>" ;

    // echo 3 <=> 5 ; //-1
    // echo "<br>" ;

    // echo 5 <=> 5; //0
    // echo "<br>" ;


    // logical operatorlar
    // echo (  true && false ) ; // true

    // echo (  true || false ) ; // true

    // echo (  !true ) ; // false

    // echo (  !false ) ; // true

    // echo ( 5 > 3 && 2 < 4) ; // true

    // if ( 5 > 3 && 2 < 4) {
    //     echo "Bu sert dogrudur." ;
    // }

    // if ( 5 > 3 ) {
        
    //     if ( 2 < 4) {
    //         print_r ("Bu sert dogrudur.");
    //     }

    // }
    //  else if (  5 > 3 ) {
    //     print_r ("Bu sert yanlisdir")
    // }
    // else {
    //     print_r ("Bu sert ne dogrudur ne de yanlisdir.");
    // }


    // $a = 5 > 3 ? 'Bu sert dogrudur' : 'Bu sert yanlisdir.';
    // print_r($a);
    

    // $a = null ;

    // $b = $a ?? null ?? 'Menim soyadim orlovdur';

    // echo $b;


    // $a = 10;
    // echo $a++ . "<br>";//10
    // echo $a++ . "<br>";//10
    // echo $a++ . "<br>";//10
    // echo $a++ . "<br>";//10
    // echo $a++ . "<br>";//10
    // echo $a++ . "<br>";//10
    // echo $a++ . "<br>";//10
    // echo $a++ . "<br>";//10
    // echo $a++ . "<br>";//10
    // echo $a . "<br>";//10

    // $b = 10;
    // echo ++$b . "<br>"; //11



    // $c = 10;
    // echo $c-- . "<br>"; //10


    // $d = 10;
    // echo --$d . "<br>"; //9


    // $bir = 5;

    // $iki = &$bir;

    // $iki = 10;

    // echo $bir . "<br>"; //5
    // echo $iki . "<br>"; //10

    // if - eger

    // $number = 5;
    // if($number > 5) {

    //     echo "Bu sayi 5'ten boyukdur";

    // }
    // elseif ($number == 5){
    //     echo "Bu sayi 5'e beraberdir";
    // }
    
    // else {
    //     echo "Bu sayi 5'ten kicikdir";
    // }


    // $a = [
    //     'bir' => 1;
    //     'iki' => 2;
    //     'uc'  => 3;
    // ]


    // $a = [
    //     'bir' => [
    //         'iki' => [
    //             'artyom'
    //         ]
    //     ],
    // ];
    // echo $a['bir']['iki'][0];

    // $a = 5;

    // echi is_int ($a) . "<br> " //true
    // echi is_string ($a) . "<br> " //false
    // echi is_null ($a) . "<br> " //false
    // echi is_array ($a) . "<br> " //false
    // echi is_bool ($a) . "<br> " //false
    // echi is_float ($a) . "<br> " //false
    // echi is_object ($a) . "<br> " //false
    // echi is_resource ($a) . "<br> " //false

    // $a = array (
    //     "42",
    //     1337,
    //     0x247, 
    //     0247,
    //     null,
    //     33242,
    //     'alma'
    // );
    // for ($i = 0; $i < count ($a); $i++ ) {

    //     echo $a[$i] . "<br>";
    // }

    // };
    // foreach () {

    // };


    //24FF

    // for ($i=5, $j = 0;     $i > 0, $j < 5;     $i--, $j++) {

    //     echo $i . "<br>";
    //     echo $j . "<br>";
    // }

    // for (;;) {
    //         Sonsuz dovr yaradir

    // }

    // $transports = [  
    //             "auto" => ["mercedes", "bmw", "opel"],
    //              "samalyot" => ["boeing-490", "qatar airways", "boeing727"],
    //              "gemi" => ["oazis" , "mubariz", "zaqatala"]
    //             ];

    // foreach ( $transports as $key => $array ) {

    //     echo "<b> $key </b>";

    //     foreach ($array as $value )   {

    //         echo "<li>$value</li> ";     
        
    //     }

    // }
    
    // echo "<br>";
    

    ?> 



</body>
</html>