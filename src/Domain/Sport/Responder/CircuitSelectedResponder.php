<?php


namespace App\Domain\Sport\Responder;



use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio1;
use App\Application\Entity\Sport\SportsPrograms\Beginner\SportsProgramCardio2;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio1 as SportsProgramCardio1Intermediate;
use App\Application\Entity\Sport\SportsPrograms\Intermediate\SportsProgramCardio2 as SportsProgramCardio2Intermediate;

class CircuitSelectedResponder
{

    private string $slug;

    private object $circuit;

    private object $human;

    public function __construct(object $circuit, string $slug, object $human){

        $this->circuit = $circuit;
        $this->slug = $slug;
        $this->human = $human;
    }

    /**
     * @return object
     */
    public function getCircuit(): object
    {
        return $this->circuit;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @return object
     */
    public function getHuman(): object
    {
        return $this->human;
    }






}