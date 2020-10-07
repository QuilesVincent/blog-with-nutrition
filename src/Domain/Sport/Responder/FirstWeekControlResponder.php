<?php


namespace App\Domain\Sport\Responder;


use Symfony\Component\Form\FormView;

class FirstWeekControlResponder
{

    private FormView $formView;

    /**
     * InscriptionProgrammeResponder constructor.
     * @param FormView $formView
     */
    public function __construct(FormView $formView)
    {
        $this->formView = $formView;
    }

    /**
     * @return FormView
     */
    public function getFormView(): FormView
    {
        return $this->formView;
    }




}