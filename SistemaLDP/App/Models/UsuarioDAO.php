<?php 

    class UsuarioDAO{
        
        public function cadastro($usuario){
            
            include '../../Conexao/conexao.php';
	        $nome = null;
            $nome = $usuario->getNome();
            $nick = null;
            $nick = $usuario->getUsuario();
            $senha = null;
            $senha = $usuario->getSenha();
            $sql = "select * from usuarios where NM_Usuario = '$nick';";
            $query = "insert into usuarios (NM_Pessoa,NM_Usuario,Senha) values ('$nome','$nick','$senha');";
            $result_sql= mysqli_query ($conexao, $sql);
            if($result_sql->num_rows == 0)
            {
                $result= mysqli_query ($conexao, $query);
                return true;
            }
            else
            {
                return false;
            }
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
          public function verificarLogin($usuario)
          {
            include '../../Conexao/conexao.php';
	        $nick = null;
            $nick = $usuario->getUsuario();
            $senha = null;
            $senha = $usuario->getSenha();
            $sql = "select * from usuarios where NM_Usuario = '$nick' and Senha = '$senha';";
            $result_sql= mysqli_query ($conexao, $sql);
            if($result_sql->num_rows > 0)
            {
                return true;
            }
            else
                return false;
          }
          
          public function listarUsuarios()
          {
            include '../../Conexao/conexao.php';
	        
            $sql = "select * from captura order by email;";
            $result_sql= mysqli_query ($conexao, $sql);
            return $result_sql;
          }
        
//        public function index()
        
        
        
       
        
        
        

    }




?>