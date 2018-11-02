<?php
    class Usuario {
        private $idusuario ;
        private $deslogin ;
        private $dessenha ;
        private $dtcadastro;
        
        public function getIdUsuario () {
            return $this -> idusuario;
        }
        
        public function setIdUsuario ($value) {
            $this -> idusuario = $value;
        }
        
        
        public function getDeslogin () {
            return $this -> deslogin;
        }
        
        public function setDeslogin ($value) {
            $this -> deslogin = $value;
        }
        
        public function getDessenha () {
            return $this -> dessenha;
        }
        
        public function setDessenha ($value) {
            $this -> dessenha = $value;
        }
        
        public function getDtcadastro () {
            return $this -> dtcadastro;
        }
        
        public function setDtcadastro ($value) {
            $this -> dtcadastro = $value;
        }
        
        public function loadById($id) {
            $sql = new Sql() ;
            $result = $sql -> select("select * from tb_usuarios where idusuario = :ID ", array(
                ":ID" => $id
            ));
            
            if(count($result) >0 ) {
                $row = $result[0];
                $this -> setIdUsuario($row['idusuario']);
                $this -> setDeslogin($row['deslogin']);
                $this -> setDessenha($row['dessenha']);
                $this -> setDtcadastro(new Datetime($row['dtcadastro']));
                
            }
        }
        
        public static function getList() {
            $sql = new Sql() ;
            return $sql -> select("select * from tb_usuarios");
             
            
        }
        
        public static function search($login) {
            $sql = new Sql() ;
            return $sql -> select("select * from tb_usuarios where deslogin like :SEARCH ", array( 
                ':SEARCH'=> "%" .$login. "%"
            ));
            
        }
        
        public function login($login,$password) {
            $sql = new Sql() ;
            $result = $sql -> select("select * from tb_usuarios where deslogin = :LOGIN and dessenha = :PASSWORD ", array(
                ":LOGIN" => $login,
                ":PASSWORD" => $password
            ));
            
            if(count($result) >0 ) {
                $row = $result[0];
                
                $this -> setData($row);    
            }
            else {
                throw new Exception("Login e/ou senha inválido") ;
            }
        }
        
        public function setData($data) {
            $this -> setIdUsuario($data['idusuario']);
            $this -> setDeslogin($data['deslogin']);
            $this -> setDessenha($data['dessenha']);
            $this -> setDtcadastro(new Datetime($data['dtcadastro']));
            
        }
        public function insert() {
            $sql = new Sql();
            
            $results = $sql -> select("CALL sp_usuarios_insert(:LOGIN,:PASSWORD)", array(
                ':LOGIN' => $this -> getDeslogin() ,
                ':PASSWORD' => $this -> getDessenha()
                
            ));
            
            if (count($results) >0) {
                $this -> setData($results[0]);
            }
            
        }
        
        public function update($login, $password) {
            
            $this -> setDeslogin($login);
            $this -> setDessenha($password);
            
            $sql = new Sql();
            $sql -> query("update tb_usuarios set deslogin = :LOGIN , dessenha = :PASSWORD where idusuario = :ID" , array(
                    ':LOGIN' => $this -> getDeslogin(),
                    ':PASSWORD' => $this -> getDessenha(),
                    ':ID' => $this -> getIdUsuario()
                
            ));
            
        }
        
        public function delete() {
            $sql = new Sql() ;
            $sql -> query("DELETE FROM tb_usuarios where idusuario = :ID" , array (
                ':ID' => $this -> getIdUsuario()
            ));
            $this -> setIdUsuario(0);
            $this -> setDeslogin("");
            $this -> setDessenha("");
            $this -> setDtcadastro(new DateTime());
            
        }
        public function __toString() {
            return json_encode(array(
                                        "idusuario" => $this ->getIdUsuario() ,
                                        "deslogin" => $this ->getDeslogin() ,
                                        "dessenha" => $this ->getDessenha() ,
                                        "dtcadastro" => $this ->getDtcadastro() -> format("d/m/Y H:i:s")
                                        
                                        
                                    )
                              
                              );
        }
    }
?>