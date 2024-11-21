<?php
class Airport {


    public function __construct(
        public $iatacode,
        public $latitude,
        public $longtitude
        ) {
   
    
   
    }
    public function getDuration(){

        $attalums=$this->getDistance();
        $atrums=$this->aircraft->speed;
        $laiks=$attalums / $atrums * 60 + 30;

        return $laiks;
    }
   
   }