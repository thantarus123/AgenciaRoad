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
          public function excluir($usuario)
          {
            include '../../Conexao/conexao.php';
	        $nomeUsuario = null;
            $nomeUsuario = $usuario->getUsuario();
            $sql = "select * from usuarios where NM_Usuario = '$nick';";
            $query = "delete from usuarios where NM_Usuario = '$nick';";
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
	        
            $sql = "select * from usuarios order by NM_Pessoa;";
            $result_sql= mysqli_query ($conexao, $sql);
            return $result_sql;
          }
        
//        public function index()
        
        public function alterarUsuario($usuario)
        {
            include '../../Conexao/conexao.php';
            $id = null;
            $id =  $usuario->getCodigo();
            $nomePessoa = null;
            $nomePessoa = $usuario->getNome();
            $nomeUsuario = null;
            $nomeUsuario = $usuario->getUsuario();
            $senhaUsuario = null;
            $senhaUsuario = $usuario->getSenha();
            $query = "update usuarios set NM_Pessoa= '$nomePessoa', NM_Usuario = '$nomeUsuario', Senha = '$senhaUsuario' WHERE ID_Usuario = '$id';";
	        $result_query= mysqli_query ($conexao, $query);
            return true;
        }
       
        
        
        

    }




?>