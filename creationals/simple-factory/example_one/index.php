<?php 

// Importo el autoload de composer para poder usar las clases de los namespaces.
// PAra poder usar todas las clases que se encuentran en la carpeta src
require __DIR__ . '/vendor/autoload.php';

// Ahora llamamos a la clase Factory, para crear los vehiculos a partir de la fabrica simple

// Creamos un objeto de la clase Factory
$factory = new SimpleFactory\Factory();

// Creamos un objeto de la clase Car
$car = $factory::createNewCar();

// Creamos un objeto de la clase Motorcycle
$motorcycle = $factory::createNewMotorbike();

// Creamos un objeto de la clase Truck
$truck = $factory::createNewTruck();

// Ahora llamamos a los metodos de cada objeto
$car->setColor('red');
$car->setModel('2019');
$car->setBrand('Toyota');

$motorcycle->setColor('blue');
$motorcycle->setModel('2018');
$motorcycle->setBrand('Honda');

$truck->setColor('black');
$truck->setModel('2017');
$truck->setBrand('Mazda');
