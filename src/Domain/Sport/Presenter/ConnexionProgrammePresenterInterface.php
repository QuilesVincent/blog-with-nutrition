<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\ConnexionProgrammeResponder;
use Symfony\Component\HttpFoundation\Response;

interface ConnexionProgrammePresenterInterface
{
    public function present(ConnexionProgrammeResponder $connexionProgrammeResponder): Response;

}