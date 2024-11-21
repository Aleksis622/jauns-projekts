<?php

class Flight {
    // Publiskas īpašības
    public $flightCode;
    public $origin;
    public $destination;
    public $departureTime;
    public $aircraft;

    // Konstruktoru, lai inicializētu klases īpašības
    public function __construct($flightCode, $origin, $destination, $departureTime, $aircraft) {
        $this->flightCode = $flightCode;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->departureTime = $departureTime;
        $this->aircraft = $aircraft;
    }

    // Metode, lai parādītu lidojuma informāciju
    public function displayFlightInfo() {
        echo "Lidojuma kods: " . $this->flightCode . "<br>";
        echo "Izlidošanas lidosta: " . $this->origin . "<br>";
        echo "Galamērķa lidosta: " . $this->destination . "<br>";
        echo "Izlidošanas laiks: " . $this->departureTime->format('Y-m-d H:i:s') . "<br>";
        echo "Lidmašīnas informācija: <br>";
        $this->aircraft->displayInfo(); // Izsauc Aircraft klases metodi
    }
    public function getDistance() {
return "this shit is working";

 // Iegūst lidostu koordinātes
 $originCoords = $this->airportCoordinates[$this->origin] ?? null;
 $destinationCoords = $this->airportCoordinates[$this->destination] ?? null;

 // Ja nav atrastas koordinātes
 if (!$originCoords || !$destinationCoords) {
     return "Coordinates not found for one or both airports.";
 }

 // Haversīnas formula
 $lat1 = deg2rad($originCoords['lat']);
 $lon1 = deg2rad($originCoords['lon']);
 $lat2 = deg2rad($destinationCoords['lat']);
 $lon2 = deg2rad($destinationCoords['lon']);

 // Atšķirības starp platumiem un garumiem
 $dlat = $lat2 - $lat1;
 $dlon = $lon2 - $lon1;

 // Haversīnas aprēķins
 $a = sin($dlat / 2) * sin($dlat / 2) +
      cos($lat1) * cos($lat2) *
      sin($dlon / 2) * sin($dlon / 2);
 $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

 // Zemes rādiuss (vidēji 6371 km)
 $R = 6371;

 // Attālums
 $distance = $R * $c;

 return round($distance, 2); // Atgriež attālumu kilometros, noapaļotu līdz diviem cipariem


} 


}


?>
