<?php
class Smartphone implements iCallOthers, iBrowsingInWeb
{
    protected $num;
    protected $site;

    public function __construct()
    {

    }

    public function callOthers($phones)
    {
        foreach ($phones as $p){
            if (!is_numeric($p)){
                echo "Invalid number!\n";
            }else{
                echo "Calling... " . $p . "\n";
            }
        }
    }

    public function browsInWeb($sites)
    {
        foreach ($sites as $s){
            if (preg_match('/\\d/', $s) > 0){
                echo "Invalid URL!\n";
            }else{
                echo "Browsing: " . $s . "!\n";
            }
        }
    }
}