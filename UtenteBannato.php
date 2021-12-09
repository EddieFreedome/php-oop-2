<?php

require_once __DIR__ . "/utente.php";

trait Bannato {

    public $duration;

    public function setDuration($value){
        $this->duration = $value;
    }

    public function getDuration(){
        return $this->duration;
    }

}


class UtenteBannato extends Utente{
    use Bannato;


    public function __construct($_email, $_name, $_discount)
        {
            parent::__construct($_email, $_name, $_discount);
        }

}




?>