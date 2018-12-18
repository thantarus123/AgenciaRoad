<?php 

    class CapturaController{
        
        
        
        public function cadastro($nome1, $nome2, $email, $data, $cargo){
            include '../../Objetos/Captura.php';
            include '../../Models/CapturaDAO.php';
            $captura = new Captura();
            $captura -> setNome1($nome1);
            $captura -> setNome2($nome2);
            $captura -> setEmail($email);
            $captura -> setData($data);
            $captura -> setCargo($cargo);
            $dao = new CapturaDAO();
            $result = $dao -> cadastro($captura);
            return $result;
            
            
        }
//        public function salvar()
       public function excluir($nome1, $email)
       {
            include '../../Objetos/Captura.php';
            include '../../Models/CapturaDAO.php';
            $captura = new Captura();
            $captura -> setNome1($nome1);
            $captura -> setEmail($email);
            $dao = new CapturaDAO();
            $result = $dao -> excluir($captura);
            return $result;
       }
       public function alterar($id,$nome1, $nome2, $email, $data, $cargo)
       {
            include '../../Objetos/Captura.php';
            include '../../Models/CapturaDAO.php';
            $captura = new Captura();
            $captura -> setNome1($nome1);
            $captura -> setNome2($nome2);
            $captura -> setEmail($email);
            $captura -> setData($data);
            $captura -> setCargo($cargo);
            $captura -> setId($id);
            $dao = new CapturaDAO();
            $result = $dao -> alterar($captura);
            return $result;
           
           
           
       }
//        public function index()
        
        
        
       
        
        
        

    }




?>