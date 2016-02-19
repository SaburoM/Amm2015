<?php
    include_once("Model/model.php");
    
    class controller{
        
        public $model;
        public function __construct(){
            $this->model=new model();
        }
        
        public function content($arg){
            if(($arg=="" && !isset($_SESSION['login']))
                include 'Viewer/login.php';
            else if($arg=="login"){
                $risultato=$this->model->login();
                if($risultato != "Errore!"){
                    while($row=$risultato->fetch_row()){
                        if(($_REQUEST['nome_utente']==$row[0]) && ($_REQUEST['password']==$row[1])){
                            $_SESSION["login"]=true;
                            $_SESSION["nome_utente"]=$_REQUEST['nome_utente'];
                            $_SESSION["password"]=$_REQUEST['password'];                        
                            if($row[2]==1)
                                $_SESSION["admin"]=true;                           
                        }
                    }                    
                }
                else
                    include 'Viewer/login.php';
            }
      }
     }
