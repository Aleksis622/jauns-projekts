<?php 
include_once "Aircraft.php";
include_once "Airport.php";
include_once "Flight.php";
 


  $Lidmasina=new Aircraft("Airbus", "A220-300", 120, 850);

  $Airport=new Airport ("RIX", 56.924, 23.971);

  

// Definējam lidojuma datus
$flightCode = "SA503";
$origin = new Airport("RIX",56.924,23.971); // Izlidošanas lidosta
$destination = new Airport("Bojing",40.6413,-73.7781); // Galamērķa lidosta
$aircraft="Airbus 220";
// Veidojam DateTime objektu ar izlidošanas laiku
$departureTime = new DateTime();

// Veidojam Flight objektu
$flight = new Flight($flightCode, $origin, $destination, $departureTime, $aircraft);

  var_dump($Lidmasina);

  var_dump($Airport);

 var_dump($flight);

 echo $flight->getDistance();

echo $flight->getDuration();

?>