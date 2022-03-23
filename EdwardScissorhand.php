<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content ="IE=edge">
       <meta name="viewport"  content="width=device-width, initial-scale=1.0">
        <title>Cars</title>
    </head>
   <body>
<?php
class Cars
{
    public $name;
    public $model;
    public $color;

    public function __construct($name, $model, $color)
    {
        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
    }
    
}

class Ships extends Cars {
    public $shipName;
    public $shipModel;

    public function __construct($shipName, $shipModel, $color)
    {
        $this->shipName = $shipName;
        $this->shipModel = $shipModel;
        $this->color = $color;
    }
    
}
$myShip1 = new Ships('Titanic', 'Cruiser', 'Dark Grey');
echo $myShip1->shipName;
echo "<br>";
echo $myShip1->shipModel;
echo "<br>";
echo $myShip1->color;
echo "<br>";
echo "<br>";

$myCar1 = new Cars('Lightning McQueen', 'Race Car', 'Red');
echo $myCar1->name;
echo "<br>";
echo $myCar1->model;
echo "<br>";
echo $myCar1->color;
echo "<br>";
echo "<br>";

$myShip2 = new Ships('Queen Anne\'s Revenge', 'Pirate Ship', 'Wood color');
echo $myShip2->shipName;
echo "<br>";
echo $myShip2->shipModel;
echo "<br>";
echo $myShip2->color;
echo "<br>";
echo "<br>";

$myCar2 = new Cars('Batmobile', 'Superhero Car', 'Black');
echo $myCar2->name;
echo "<br>";
echo $myCar2->model;
echo "<br>";
echo $myCar2->color;
echo "<br>";
echo "<br>";

$myShip3 = new Ships('The Thousand Sunny', 'Pirate Ship', 'Wood color with some red accents');
echo $myShip3->shipName;
echo "<br>";
echo $myShip3->shipModel;
echo "<br>";
echo $myShip3->color;
echo "<br>";
echo "<br>";

$myCar3 = new Cars('KITT', '1982 Pontiac Firebird Trans Am', 'Black');
echo $myCar3->name;
echo "<br>";
echo $myCar3->model;
echo "<br>";
echo $myCar3->color;
echo "<br>";
echo "<br>";


?>
 </body>
</html>