<?php


namespace App\Domain\Sport\Responder;


use App\Application\Entity\Human;
use Symfony\Component\Form\FormView;

class BeginningSportResponder
{

    private object $human;

    /**
     * ConnexionProgrammeResponder constructor.
     * @param object $human
     */
    public function __construct(object $human)
    {
        $this->human = $human;
    }


    /**
     * @return object
     */
    public function getHuman(): object
    {
        return $this->human;
    }






}