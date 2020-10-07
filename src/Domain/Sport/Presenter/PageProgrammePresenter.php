<?php


namespace App\Domain\Sport\Presenter;


use App\Domain\Sport\Responder\PageProgrammeResponder;
use App\Infrastructure\Presenter\AbstractPresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PageProgrammePresenter extends AbstractPresenter implements PageProgrammePresenterInterface
{

    /**
     * @param PageProgrammeResponder $pageProgrammeResponder
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function present(PageProgrammeResponder $pageProgrammeResponder): Response
    {
        return new Response($this->twig->render("sport/programme/all-programs.html.twig", [
            "programs" => $pageProgrammeResponder->getPrograms(),
            "human" => $pageProgrammeResponder->getHuman(),
            "weekRecipe" => $pageProgrammeResponder->getWeekRecipe(),
            "title" => "Page des programme"
        ]));
    }

    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @return RedirectResponse
     */
    public function redirect(UrlGeneratorInterface $urlGenerator): RedirectResponse
    {
        return new RedirectResponse($urlGenerator->generate("programme_sport_control_first_week"));
    }


}