<?php
class GoldenEditionBook extends Book
{
    public function __construct($title, $author, $price)
    {
        parent::__construct($title, $author, $price);
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price + $price * 0.3;
    }
}