<?php

class ResidentialWay extends HighWay
{


    public function addVehicule(Vehicule $vehicule)
    {
       if ($vehicule instanceof Vehicule) {

           $this->currentVéhicules [] = $vehicule;
       }
    }
}