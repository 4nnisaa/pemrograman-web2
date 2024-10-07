<?php

require_once "orangBiasa.php";

class orangInggris extends orangBiasa{

    //Override
    public function ucapSalam()
    {
        echo "Hello my name is " . $this->nama . "<br>";
    }
}