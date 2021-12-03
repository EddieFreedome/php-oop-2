<?php

    require_once __DIR__ . "./utente.php";

    class Utente {

        public $dataList = [
            "$email", "$name", "$discount"
        ];

        public function takeData(){
            foreach ($dataList  as $data){
                //invoco funczione che fa get
                //invoco la funzione che fa set
                $this->setData($data);
                $this->getData($data);
                var_dump($_data);
                var_dump($_data);


                }
                
            }
        }



        // public $email;
        // public $name;
        // public $discount;

        public function setData($data){
            $this->$data = $_data;
        }

        public function getData($data){
            return $this->$_data;
        }





        


        public function __construct($_email, $_name, $_discount)
        {
            $this->email = $_email;
            $this->name = $_name;
            $this->dataList = $_dataList
            $this->setDiscount($_discount); 
        }

        // public function setDiscount($_value){
        //     $this->discount = $_value;
        // }

        // public function getDiscount(){
        //     return $this->discount;
        // }

    }

    $ciccio = new Utente("ciccio@gmail.com" , "Ciccio", "0%")

?>