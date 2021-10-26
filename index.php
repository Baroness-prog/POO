<?php

require_once 'bicycles.php';
require_once 'CAR.php';
require_once 'truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';


//cycle

$Bicycle = new Bicycle( 'noir',  2, 'pied');
echo $Bicycle-> forward();'<br>';





//car
$Car = new car('noir',4,'gasoil');


//truck
$truck = new truck('bleu',3,'fioul');


$truck->setLoading=4;
echo $truck->inFilling().'<br>';

echo $truck->forward();

echo '<br> Vitesse du camion : ' . $Car->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->brake();

echo '<br> Vitesse du camion : ' . $Car->getCurrentSpeed() . ' km/h' . '<br>';

$truck->setLoading=2;
echo $truck->inFilling().'<br>';



$motorWay = new MotorWay(4,130);
$motorWay->addVehicule($Car);

var_dump($motorWay);
$pedestrian = new PedestrianWay(1,10);
$skateboard = new Skateboard('noir',1,'foot');
$pedestrian->addVehicule($Bicycle);
$pedestrian->addVehicule($skateboard);



$residential = new ResidentialWay(2,50);
$residential->addVehicule($skateboard);
$residential->addVehicule($Bicycle);
$residential->addVehicule($Car);


try {

    $Car->forward() . "\n";
} catch(Exception $e){

    echo "Exception received  : ". $e->getMessage() . "n";
    $Car->setHasParkBrake(false);
} finally {

    echo " : Ma voiture roule comme un donut";

}









