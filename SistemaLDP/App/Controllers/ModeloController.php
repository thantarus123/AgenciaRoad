<?php 

    class ModeloController{
        
        
        
        public function cadastro($nomeModelo,$assuntoModelo,$conteudoModelo){
            include '../../Objetos/Modelo.php';
            include '../../Models/ModeloDAO.php';
            $modelo = new Modelo();
            $modelo -> setNome($nomeModelo);
            $modelo -> setAssunto($assuntoModelo);
            $modelo -> setConteudo($conteudoModelo);
            $dao = new ModeloDAO();
            $result = $dao -> cadastro($modelo);
            return $result;
            
            
        }
        //        public function salvar()
        public function excluir($nome1, $email)
        {
            include '../../Objetos/Captura.php';
            include '../../Models/CapturaDAO.php';
            $modelo = new Usuario();
            $modelo -> setNome1($nome1);
            $modelo -> setEmail($email);
            $dao = new UsuarioDAO();
            $result = $dao -> excluir($modelo);
            return $result;
        }
        //        public function excluir()
        public function verificarLogin($nick, $senha)
        {
            include '../../Objetos/Usuario.php';
            include '../../Models/UsuarioDAO.php';
            $modelo = new Usuario();
            $modelo -> setUsuario($nick);
            $modelo -> setSenha($senha);
            $dao = new UsuarioDAO();
            $result = $dao -> verificarLogin($modelo);
            return $result;
        }
        //        public function verificarLogin()
        public function listarUsuarios()
        {
            include '../../Models/UsuarioDAO.php';
            $dao = new UsuarioDAO();
            $result = $dao -> listarUsuarios();
            return $result;
        }
        //        public function listarUsuarios()
//        public function index()
        
        
        public function alterar($codigo, $nome, $assunto, $conteudo)
        {
            include '../../Objetos/Modelo.php';
            include '../../Models/ModeloDAO.php';
            $modelo = new Modelo();
            $modelo -> setCodigo($codigo);
            $modelo -> setNome($nome);
            $modelo -> setAssunto($assunto);
            $modelo -> setConteudo($conteudo);
            $dao = new ModeloDAO();
            $result = $dao ->alterar($modelo);
            return $result;
            
        }
       
        
        
        

    }




?>