<?php

namespace App\Domain\Sport\Responder;

class PaiementControlResponder
{

    private object $intent;

    private object $product;

    /**
     * PageProgrammeResponder constructor.
     * @param object $product
     * @param object $intent
     */
    public function __construct(object $product, object $intent)
    {
        $this->product = $product;
        $this->intent = $intent;
    }

    public function getProduct(): object
    {
        return $this->product;
    }

    /**
     * @return object
     */
    public function getIntent(): object
    {
        return $this->intent;
    }


}
