
<?php 
class model{
        private static $mysqli;
        private static $user="menneasAndrea";
        private static $password="passero7452";
        private static $database="amm15_menneasAndrea";
        
        public function __construct(){
            self::$mysqli=new mysqli();
            session_start();
        }        
        private function connectToDB(){
            @self::$mysqli->connect("localhost", self::$user, self::$password, self::$database);
        }  
        public function login(){
            if(isset($_REQUEST['nome_utente'])&& isset($_REQUEST['password'])){
                $this->connectToDB();
                $risultato=self::$mysqli->query("SELECT Username, Password, ID FROM Utenti");
                if(self::$mysqli->errno>0)
                    return "Errore!";                
                else
                    return $risultato;
            }
        } 
