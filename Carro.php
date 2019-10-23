<?php

    class Carro{
        
        private $velocimetro;
        private $ligado;
        
        //Construct do estado inical do carro
        public function __construct(){
            $this->velocimetro = 0;
            $this->ligado = false;
        }
        
        //Ligar carro
        public function Ligar()
        {
            $this->ligado = true; 
        }
        
        //Desligar carro
        public function Desligar()
        {
            $this->ligado = false;
            $this->velocimetro = 0;
        }
        
        //Acelerar carro
        public function Acelerar()
        {
            //Verifica se carro esta ligado
            if($this->ligado == true)
            {
                //Verifica KM do velocimetro
                if($this->velocimetro == 100)
                {
                    //Não acelera
                }
                //Caso KM menor que 100, acelera
                else
                {
                    $this->velocimetro = $this->velocimetro + 10;
                }
            }
        }
        
        //Desacelerar carro
        public function Desacelerar()
        {   
            //Verifica se carro esta ligado
            if($this->ligado == true) 
            {
                //Verifica km do velocimetro
                if($this->velocimetro == 0)
                {
                    //Não desacelera
                }
                //Caso KM maior que 0, desacelera
                else
                {
                    $this->velocimetro = $this->velocimetro - 10;
                }
            }
        }
        
        //Pega estado do motor
        public function getLigado(){
            return $this->ligado."<br>";
        }
        
        //Pega estado do velocimetro
        public function getVelocimetro()
        {
            return $this->velocimetro."km/h<br>";
        }
        
    }

?>