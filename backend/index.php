<?php 
include_once "Aircraft.php";
include_once "Airport.php";
include_once "Flight.php";
 


  $Lidmasina=new Aircraft("Airbus", "A220-300", 120, 850);

  $Airport=new Airport ("RIX", 56.924, 23.971);

  // Veidojam DateTime objektu ar izlidošanas laiku
$departureTime = new DateTime('2024-12-01 10:30:00', new DateTimeZone('Europe/Riga'));

// Definējam lidojuma datus
$flightCode = "SA503";
$origin = "Rīga"; // Izlidošanas lidosta
$destination = "London"; // Galamērķa lidosta

// Veidojam Flight objektu
$flight = new Flight($flightCode, $origin, $destination, $departureTime, $aircraft);

  var_dump($Lidmasina);

  var_dump($Airport);

  // Izdrukājam lidojuma informāciju
$flight->displayFlightInfo();

?>