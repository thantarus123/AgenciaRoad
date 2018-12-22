<?php 

    class ModeloDAO{
        
        public function cadastro($modelo){
            
            include '../../Conexao/conexao.php';
	        $nome = null;
            $nome = $modelo->getNome();
            $assunto = null;
            $assunto = $modelo->getAssunto();
            $conteudo = null;
            $conteudo = $modelo->getConteudo();
            $sql = "select * from modelos where nome = '$nome';";
            $query = "insert into modelos (nome,assunto,conteudo) values ('$nome','$assunto','$conteudo');";
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
          
          public function listarModelos()
          {
            include '../../Conexao/conexao.php';
	        
            $sql = "select * from modelos order by assunto;";
            $result_sql= mysqli_query ($conexao, $sql);
            return $result_sql;
          }
        
//        public function index()
        
        public function alterar($modelo)
        {
            include '../../Conexao/conexao.php';
            $id = null;
            $id =  $modelo->getCodigo();
            $nome = null;
            $nome = $modelo->getNome();
            $assunto = null;
            $assunto = $modelo->getAssunto();
            $conteudo = null;
            $conteudo = $modelo->getConteudo();
            $query = "update modelos set nome = '$nome', assunto = '$assunto', conteudo = '$conteudo' WHERE id = '$id';";
	        $result_query= mysqli_query ($conexao, $query);
            return true;
        }
       
        
        
        

    }




?>