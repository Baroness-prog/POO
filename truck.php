<?php

require_once 'vehicule.php';



class Truck extends Vehicule

{

    protected string $energy ;
    public const load = 3 ;


    public function __construct(string $color, int $nbSeats,$energy)
    {
        parent::__construct($color, $nbSeats,$energy);
        $this->setLoading = 0;

    }

    public function inFilling():string
{
    if ($this->setLoading >= 3) {
    return "le camion est Full"; }
 else { return "In filling";
 }
}
}
