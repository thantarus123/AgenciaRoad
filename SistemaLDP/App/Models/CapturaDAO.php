<?php 

    class CapturaDAO{
        
        public function cadastro($captura){
            
            include '../../Conexao/conexao.php';
	        $nome1 = null;
            $nome1 = $captura->getNome1();
            $nome2 = null;
            $nome2 = $captura->getNome2();
            $email = null;
            $email = $captura->getEmail();
            $data = null;
            $data = $captura->getData();
            $cargo = null;
            $cargo = $captura->getCargo();
	
            $query = "insert into captura (nome1,nome2,email,data,cargo) values ('$nome1','$nome2','$email', '$data', '$cargo');";
	        $result= mysqli_query ($conexao, $query);
            return $result;
            
            
        }
        public function alterar($captura){
            
            include '../../Conexao/conexao.php';
            $id = null;
            $id = $captura->getId();
	        $nome1 = null;
            $nome1 = $captura->getNome1();
            $nome2 = null;
            $nome2 = $captura->getNome2();
            $email = null;
            $email = $captura->getEmail();
            $data = null;
            $data = $captura->getData();
            $cargo = null;
            $cargo = $captura->getCargo();
	
            $query = "update captura set nome1= '$nome1', nome2= '$nome2', email= '$email', data= '$data', cargo= '$cargo' 
            WHERE id= '$id';";
	        $result= mysqli_query ($conexao, $query);
            return $result;
            
            
        }
//        public function salvar()
          public function excluir($captura)
          {
            include '../../Conexao/conexao.php';
	        $nome1 = null;
            $nome1 = $captura->getNome1();
            $email = null;
            $email = $captura->getEmail();
            $sql = "select * from captura where nome1 = '$nome1' and email = '$email';";
            $query = "delete from captura where nome1 = '$nome1' and email = '$email';";
            $result_sql= mysqli_query ($conexao, $sql);
            if($result_sql->num_rows > 0)
            {
                
	            $result_query= mysqli_query ($conexao, $query);
                return true;
            }
            else
                return false;
          }
//        public function index()
        
        
        
       
        
        
        

    }




?>