<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\BeginningSportResponder;
use App\Domain\Sport\Responder\ConnexionProgrammeResponder;
use Symfony\Component\HttpFoundation\Response;

interface BeginningSportPresenterInterface
{
    public function present(BeginningSportResponder $beginningSportResponder): Response;

}