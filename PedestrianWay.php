<?php

class PedestrianWay extends HighWay
{

    public function addVehicule(Vehicule $vehicule)
    {
        if ($vehicule instanceof Bicycle){
            $this->currentVehicules [] = $vehicule ;
        }if ($vehicule instanceof Skateboard){
        $this->currentVehicules [] = $vehicule ;

    }
    }
}