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
}
?>
