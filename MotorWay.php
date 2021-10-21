<?php

require_once 'HighWay.php';


class MotorWay extends HighWay
{

    public function addVehicule(Vehicule $vehicule)
    {
        if ($vehicule instanceof Car){
            $this->currentVéhicules [] = $vehicule;
        }
    }


}