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




// class Test {

//     protected $name = "Artyom";
    
//     protected function sayHello() {
//         return $this->name . "Salam";
//     }


// }

// class ChildTest extends Test {

//     public function sayHelloFromChild() {
//         return $this->sayHello();
//     }
// }





// $test = new Test();
// $childTest = new ChildTest();
// echo $childTest->sayHelloFromChild() . "<br>";



// class Test {

//     private $name = "Artyom";
    
//     private function sayHello() {
//         return $this->name . "Salam";
//     }

//     public function getName() {
//         return $this->sayHello();
//     }


// }


// class ChildTest extends Test {

//     public function sayHelloFromChild() {
//         return $this->getName();
//     }
// }





// $test = new Test();
// $childTest = new ChildTest();
// echo $childTest->sayHelloFromChild() . "<br>";


// class Counter {

//     public $count = 0;

//     public function increment() {
//         $this->count++;
//     }

// }


// $counter1 = new Counter();
// $counter2 = new Counter();

// echo $counter1->count . "<br>";
// echo $counter2->count . "<br>";



// class Counter {

//     public static $count = 0;

//     public static function increment() {
//         self::$count++;
//     }

// }

// Counter::increment();
// Counter::increment();

// echo Counter::$count . "<br>";



//INHERITANCE ( extends ) - MIRAS ALMAQ 



// class Animal {

//     public $name;

//     public function eat() {

//         echo $this->name . " yemek yeyir.<br>";

//     }

// }

// class Dog extends Animal {

//     public function bark(){

//         echo $this->name . " hurur.<br>";

//     }

// }

// $dog = new Dog();
// $dog->name = "Buddy";
// $dog->eat();
// $dog->bark();


// OVERRIDE - USTUNE YAZMAQ

// class Animal {

//     public $name;

//     public function eat() {

//         echo $this->name . " yemek yeyir.<br>";

//     }

// }

// class Dog extends Animal {

//     public function eat(){

//         echo $this->name . " hurur.<br>";

//     }

// }

// $dog = new Dog();
// $dog->name = "Buddy";
// $dog->eat();

//PARENT::

// class Animal {

//     public $name;

//     private function eat() {

//         echo $this->name . " yemek yeyir.<br>";

//     }

// }

// class Dog extends Animal {

//     public function eat(){
//         parent::eat();
//         echo $this->name . " hurur.<br>";

//     }

// }

// $dog = new Dog();
// $dog->name = "Buddy";
// $dog->eat();

class A {
    public function methodA() {
        echo "Method A cagirirldi.<br>";
        }    
}

class B extends A {
    public function methodB() {
        echo "Method B cagirirldi.<br>";
        }    
}

class C extends B {
    public function methodC() {
        echo "Method C cagirirldi.<br>";
        }    
}

class D extends C {
    public function methodD() {
        echo "Method D cagirirldi.<br>";
        }    
}
$D = new D();
$D->methodA();
$D->methodB();
$D->methodC();
$D->methodD();






?>





    
</body>
</html>