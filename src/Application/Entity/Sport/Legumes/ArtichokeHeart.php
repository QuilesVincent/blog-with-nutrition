<?php


namespace App\Application\Entity\Sport\Legumes;


use App\Application\Entity\Sport\Legumes;

class ArtichokeHeart extends Legumes
{

    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
        $this->name = "Coeur d'artichaud";
        $this->calories = 0.29;
        $this->fat = 0.007;
        $this->carbohydrate = 0.032;
        $this->proteines = 0.018;
    }

}