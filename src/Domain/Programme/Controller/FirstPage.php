<?php


namespace App\Domain\Programme\Controller;


use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitOne;
use App\Application\Entity\Sport\Circuits\Beginner\BeginnerCircuitTwo;
use App\Application\Entity\Sport\Training\BeginnerCardioTraining;
use App\Domain\Programme\Presenter\FirstPagePresenterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FirstPage
{

    /**
     * @param Request $request
     * @param FirstPagePresenterInterface $firstPagePresenter
     * @param BeginnerCardioTraining $beginnerCardioTraining
     * @return Response
     */
    public function __invoke(Request $request,
                             FirstPagePresenterInterface $firstPagePresenter,
                             BeginnerCardioTraining $beginnerCardioTraining): Response
    {
        return $firstPagePresenter->present(
            $beginnerCardioTraining);
    }


}