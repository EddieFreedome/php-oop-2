<?php

    require_once __DIR__ . "./utente.php";

    class UtentePremium extends Utente{

        public $discount;
        public $fastShipment;


        public function __construct($_fastShipment, $_discount)
        {
            $this->fastShipment = $_discount;
            $this->discount = $_fastShipment;
        }


    }

    $pippo = new UtentePremium("40%", "2");
    var_dump($pippo)

?>