<?php

    class Utente {


        public $email;
        public $name;
        public $discount;

        
        public function setFirstName($value){
            //controlli sulla validita dei dati
            $this->firstName = $value;
        }
        
        // public function setLastName($value){
            //     //controlli sulla validita dei dati
            //     $this->lastName = $value;
            // }
            
            // public function takeData(){
            //     foreach ($dataList  as $data){
            //         //invoco funzione che fa get
            //         //invoco la funzione che fa set
            //         $this->setData($data);
            //         $this->getData($data);
            //         var_dump($_data);
            //         var_dump($_data);
                    
                    
            //     }
                
            // }
        
        // public function setData($data){
        //     $this->$data = $_data;
        // }
        
        // public function getData($data){
        //     return $this->$_data;
        // }
        
        
        
        
        public function __construct($_email, $_name, $_discount)
        {
            $this->email = $_email;
            $this->name = $_name;
            $this->discount = $_discount; 
        }
        
        
        
        
        
        // public function setDiscount($_value){
            //     $this->discount = $_value;
            // }
            
            // public function getDiscount(){
                //     return $this->discount;
                // }
                
    }
            
?>
            
            
            
            