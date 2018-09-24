<?php
class Book
{
    protected $title;
    protected $author;
    protected $price;

    /**
     * Book constructor.
     * @param $title
     * @param $author
     * @param $price
     * @throws Exception
     */
    public function __construct($title, $author, $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @throws Exception
     */
    public function setTitle($title): void
    {
        if (strlen($title) < 3){
            throw new Exception('Title not valid!');
        }
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     * @throws Exception
     */
    public function setAuthor($author): void
    {
        $names = explode(' ', $author);
        $lastName = $names[1];

        //check if the first symbol is digit
        if (strlen($lastName) > 0 && ctype_digit(substr($lastName, 0, 1))){
            throw new Exception('Author not valid!');
        }

        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @throws Exception
     */
    public function setPrice($price): void
    {
        if ($price <= 0){
            throw new Exception('Price not valid!');
        }
        $this->price = $price;
    }


}