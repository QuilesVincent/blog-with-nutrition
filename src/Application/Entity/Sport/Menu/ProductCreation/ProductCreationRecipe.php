<?php


namespace App\Application\Entity\Sport\Menu\ProductCreation;


use App\Application\Entity\Sport\Menu;

class ProductCreationRecipe extends Menu
{

    public function __construct(object $human)
    {
        parent::__construct($human);
        $this->type = "ProductCreation";
    }

}