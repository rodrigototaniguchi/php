<?php
    class Endereco {
        private $logradouro ;
        private $numero ;
        private $cidade;
        
        public function __construct($a,$b,$c) {  // __construct - método construtor - já chama no new o método
            $this -> logradouro = $a;
            $this -> numero = $b;
            $this -> cidade = $c;
            
        }
        
        public function __destruct() {
            var_dump("DESTRUIR") ;
        }
        
    }
    $meuEndereco = new Endereco("Rua Abraao Miguel","113","Santos");
    //$meuEndereco = new Endereco(); - sem definir os parametrôs dá erro    

    var_dump($meuEndereco);

    unset($meuEndereco);
    
?>