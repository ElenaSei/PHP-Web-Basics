<?php
class Box{
    private $length;
    private $width;
    private $height;
    public $errorMsg;

    public function __construct($length, $width, $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function setLength($length)
    {
        if ($length <= 0){
            return $this->errorMsg = "Length cannot be zero or negative.";
        }else{
            $this->length = $length;
        }
    }

    public function setWidth($width)
    {
        if ($width <= 0){
            return $this->errorMsg = "Width cannot be zero or negative.";
        }else{
            $this->width = $width;
        }
    }

    public function setHeight($height)
    {
        if ($height <= 0){
            return $this->errorMsg = "Height cannot be zero or negative.";
        }else{
            $this->height = $height;
        }
    }

    public function getSurfaceArea(){
        if (empty($this->errorMsg)){
            return (2 * $this->length * $this->width) + (2 * $this->length * $this->height) + (2 * $this->width * $this->height);
        }else{
            return $this->errorMsg;
        }

    }

    public function getLateralSurfaceArea(){
        if (empty($this->errorMsg)) {
            return (2 * $this->length * $this->height) + (2 * $this->width * $this->height);
        }else{
            return $this->errorMsg;
        }
    }

    public function getVolume(){
        if (empty($this->errorMsg)) {
            return $this->length * $this->width * $this->height;
        }else{
            return $this->errorMsg;
        }
    }
}

$box = new Box(readline(), readline(), readline());

if (is_numeric($box->getSurfaceArea()) && is_numeric($box->getLateralSurfaceArea()) && is_numeric($box->getVolume())){
    echo "Surface Area - " . number_format($box->getSurfaceArea(), 2, '.', '') . "\n";
    echo "Lateral Surface Area - " . number_format($box->getLateralSurfaceArea(), 2, '.', '') . "\n";
    echo "Volume - " . number_format($box->getVolume(), 2, '.', '') . "\n";
}else{
    echo $box->errorMsg;
}
