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
            $captura = new Captura();
            $captura -> setNome1($nome1);
            $captura -> setEmail($email);
            $dao = new CapturaDAO();
            $result = $dao -> excluir($captura);
            return $result;
        }
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
        public function listarUsuarios()
        {
            include '../../Models/UsuarioDAO.php';
            $dao = new UsuarioDAO();
            $result = $dao -> listarUsuarios();
            return $result;
        }
//        public function index()
        
        
        
       
        
        
        

    }




?>