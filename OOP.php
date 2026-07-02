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

class Car {

    public $brand;
    public $color;

    public function start() {
        echo"avtomobil start edildi";
    }

    //private
    //protected

}
//klass yaratmaq ve klasin obyektini yaratmaq ayri-ayri islerdir

$car = new Car();
$car ->start();




?>





    
</body>
</html>