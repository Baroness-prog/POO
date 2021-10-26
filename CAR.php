<?php


require_once 'vehicule.php';


class Car extends Vehicule

{
    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];


    private bool $HasParkBrake = true;

    private int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy)

    {

       parent::__construct($color,$nbSeats,$energy);

        $this->setEnergy($energy);

    }

    public function forward(): string
    {
        if ($this->HasParkBrake) {
            throw NEW Exception( 'tu ne peux pas avancer, deverouilles le frein à main');
        } $this->currentSpeed = 15;
        return "Go !";
    }

    /**
     * @return bool
     */
    public function isHasParkBrake(): bool
    {
        return $this->HasParkBrake;
    }

    /**
     * @param bool $HasParkBrake
     */
    public function setHasParkBrake(bool $HasParkBrake): void
    {
        $this->HasParkBrake = $HasParkBrake;
    }



    public function getEnergy(): string

    {

        return $this->energy;

    }


    public function setEnergy(string $energy): Car

    {

        if (in_array($energy, self::ALLOWED_ENERGIES)) {

            $this->energy = $energy;

        }

        return $this;

    }


    public function getEnergyLevel(): int

    {

        return $this->energyLevel;

    }


    public function setEnergyLevel(int $energyLevel): void

    {

        $this->energyLevel = $energyLevel;

    }


}