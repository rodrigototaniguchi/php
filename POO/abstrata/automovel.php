<?php
    
   interface Veiculo {
        public function Acelerar($velocidade);
        public function Freiar($velocidade);
        public function TrocarMarcha($marcha);
    }
    abstract class Automovel implements Veiculo {
        public function Acelerar($velocidade)
        {
            echo "O veículo acelerou até " . $velocidade . "km/h"; 
        }
     
        public function Freiar($velocidade)
        {
            echo "O veículo frenar até " . $velocidade . "km/h"; 
        }
        
        public function TrocarMarcha($marcha) {
            echo "O veículo engatou a marcha " . $marcha ;
        }
    }
?>