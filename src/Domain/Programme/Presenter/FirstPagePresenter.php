<?php


namespace App\Domain\Programme\Presenter;



use App\Application\Entity\Sport\Circuits\BeginnerCircuitOne;
use App\Application\Entity\Sport\Circuits\BeginnerCircuitTwo;
use App\Application\Entity\Sport\Circuits\WarmUpCircuit;
use App\Application\Entity\Sport\Training\BegginerCardioTrainingRepresentation;
use App\Application\Entity\Sport\Training\BeginnerCardioTraining;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class FirstPagePresenter extends AbstractPresenter implements FirstPagePresenterInterface
{

    /**
     * @param BeginnerCardioTraining $beginnerCardioTraining
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(BeginnerCardioTraining $beginnerCardioTraining): Response
    {
        $training = new BegginerCardioTrainingRepresentation($beginnerCardioTraining);
        return new Response($this->twig->render("programme/firstPage.html.twig", [
            "title" => "Début du programme",
            "programme" => $training
        ]));
    }


}