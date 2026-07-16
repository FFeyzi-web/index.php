<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php


//OOP - Object Oriented Proqraming 

// class Riyaziyyat {

//     public $eded1 = 4;
//     public $eded2 = 2;

//     public function topla() {
//         return $this->eded1 + $this->eded2;
       
//        }
//     public function vurma() {
//         return $this->eded1 * $this->eded2;
//        }
//     //private
//     //protected

// }
// $riyaziyyatFenni = new Riyaziyyat();
// echo $riyaziyyatFenni->topla();






//klass yaratmaq ve klasin obyektini yaratmaq ayri-ayri islerdir

// $car = new Car();
// $car->start();
// $car->brand = 'bmw <br>';
// // echo $car->brand;



// $car2 = new Car();
// $car2->brand = 'opel';
// $car2->start();
// echo $car2->brand ;





//public
//protected
//private

// class Test {

//     public $name = "Artyom";
    
//     public function sayHello() {

//         return $this->name . "Salam";

//     }


// }


// $test = new Test();

// echo $test->name . "<br>";
// echo $test->sayHello(). "<br>";




class Test {

    protected $name = "Artyom";
    
    protected function sayHello() {
        return $this->name . "Salam";
    }


}

class ChildTest extends Test {

    public function sayHelloFromChild() {
        return $this->sayHello();
    }
}





$test = new Test();
$childTest = new ChildTest();
echo $childTest->sayHelloFromChild() . "<br>";






?>





    
</body>
</html>