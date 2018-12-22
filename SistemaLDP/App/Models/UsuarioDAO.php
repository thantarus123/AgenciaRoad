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
          public function excluirUsuario($usuario)
          {
            include '../../Conexao/conexao.php';
	        $nomeUsuario = null;
            $nomeUsuario = $usuario->getUsuario();
            $sql = "select * from usuarios where NM_Usuario = '$nomeUsuario';";
            $query = "delete from usuarios where NM_Usuario = '$nomeUsuario';";
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
        
        public function alterarUsuario($usuario, $unomeComp)
        {
            include '../../Conexao/conexao.php';
            $id = null;
            $id =  $usuario->getCodigo();
            $nomePessoa = null;
            $nomePessoa = $usuario->getNome();
            $nomeUsuario = null;
            $nomeUsuario = $usuario->getUsuario();
            $sql = "select * from usuarios where NM_Usuario = '$nomeUsuario';";
            $query = "update usuarios set NM_Pessoa= '$nomePessoa', NM_Usuario = '$nomeUsuario' WHERE ID_Usuario = '$id';";
            if(strcmp($nomeUsuario,$unomeComp)!=0){
                $result_query= mysqli_query ($conexao, $sql);
                if($result_query->num_rows == 0){
                    $result= mysqli_query ($conexao, $query);
                    return true;
                }else{
                    return false;
                }
            }else{
                $result= mysqli_query ($conexao, $query);
                return true;
            }
            
        }
       
        /*public function listarUsuarioNome($nome){
            include '../../Conexao/conexao.php';
            $nomePesquisa = null;
            $nomePesquisa = $nome;
            $sql = "select * from usuarios where NM_Usuario like '$nome%'";
            $result = mysqli_query($conexao,$sql)
            return true;
        }*/
        
        
        

    }




?>