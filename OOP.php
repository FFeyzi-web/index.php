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

class Riyaziyyat {

    public $eded1 = 4;
    public $eded2 = 2;

    public function topla() {
        return $this -> eded1 + $this->eded2;
       
       }
       public function topla() {
        return $this -> eded1 + $this->eded2;

    //private
    //protected

}
$riyaziyyatFenni = new Riyaziyyat();
echo $riyaziyyatFenni -> topla();






//klass yaratmaq ve klasin obyektini yaratmaq ayri-ayri islerdir

// $car = new Car();
// $car ->start();
// $car ->brand = 'bmw <br>';
// // echo $car ->brand;



// $car2 = new Car();
// $car2->brand = 'opel';
// $car2->start();
// echo $car2 -> brand ;





?>





    
</body>
</html>