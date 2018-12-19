<?php 

    class UsuarioController{
        
        
        
        public function cadastro($nome, $nick, $senha){
            include '../../Objetos/Usuario.php';
            include '../../Models/UsuarioDAO.php';
            $usuario = new Usuario();
            $usuario -> setNome($nome);
            $usuario -> setUsuario($nick);
            $usuario -> setSenha($senha);
            $dao = new UsuarioDAO();
            $result = $dao -> cadastro($usuario);
            return $result;
            
            
        }
        //        public function salvar()
        public function excluir($nome1, $email)
        {
            include '../../Objetos/Captura.php';
            include '../../Models/CapturaDAO.php';
            $usuario = new Usuario();
            $usuario -> setNome1($nome1);
            $usuario -> setEmail($email);
            $dao = new UsuarioDAO();
            $result = $dao -> excluir($usuario);
            return $result;
        }
        //        public function excluir()
        public function verificarLogin($nick, $senha)
        {
            include '../../Objetos/Usuario.php';
            include '../../Models/UsuarioDAO.php';
            $usuario = new Usuario();
            $usuario -> setUsuario($nick);
            $usuario -> setSenha($senha);
            $dao = new UsuarioDAO();
            $result = $dao -> verificarLogin($usuario);
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
        
        
        public function alterarUsuario($codigo, $nome, $nick, $senha)
        {
            include '../../Objetos/Usuario.php';
            include '../../Models/UsuarioDAO.php';
            $usuario = new Usuario();
            $usuario -> setNome($nome);
            $usuario -> setUsuario($nick);
            $usuario -> setSenha($senha);
            $usuario -> setCodigo($codigo);
            $dao = new UsuarioDAO();
            $result = $dao ->alterarUsuario($usuario);
            return $result;
            
        }
       
        
        
        

    }




?>