<?php
class Ferrari implements iFerrari
{
    protected $car = "Ferrari";
    protected $model = "488-Spider";
    protected $driver;
    static $objNum = 0;

    public function __construct($driver)
    {
        self::$objNum++;
        $this->driver = $driver;
    }

    public function brake()
    {
        return "Brakes!";
    }

    public function gas()
    {
        return "Zadu6avam sA!";
    }

    public function __toString()
    {
        return $this->model . '/'
            . $this->brake() . '/'
            .$this->gas() . '/'
            .self::forUrl($this->driver) . '/ '
            . 'inst. ' . self::$objNum;
    }

    static function forUrl(string $str, string $rep="-"){
        return (str_replace(' ', $rep, $str));
    }
}