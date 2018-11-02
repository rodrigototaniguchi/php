<?php
    class Pessoa {
        public $nome; //atributo
        
        public function falar(){ //método
            
            return "O meu nome é " .$this->nome;
            
        }
        
    }
$kakaroto = new Pessoa();
$kakaroto->nome = "Kakaroto";
echo $kakaroto->falar();
?>