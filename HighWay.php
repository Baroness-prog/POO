<?php



abstract class HighWay
{
protected int $nbLane;
protected int $maxSpeed;
protected array $currentVéhicules = [];
protected array $vehicule = ['Car','Skateboard','bicycle'];


public function __construct(int $nbLane,int $maxSpeed)
{
    $this->nbLane = $nbLane;
    $this->maxSpeed = $maxSpeed;
}

    /**
     * @return int
     */
   public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return array
     */
    public function getCurrentVéhicules(): array
    {
        return $this->currentVéhicules;
    }

    /**
     * @param array $currentVéhicules
     */
    public function setCurrentVéhicules($currentVéhicules): void
    {
        $this->currentVéhicules  = $currentVéhicules;
    }

    abstract public function addVehicule(Vehicule $vehicule);


}




