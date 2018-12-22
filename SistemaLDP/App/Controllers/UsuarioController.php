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
        public function excluirUsuario($usuarioNM)
        {
            include '../../Objetos/Usuario.php';
            include '../../Models/UsuarioDAO.php';
            $usuario = new Usuario();
            $usuario -> setUsuario($usuarioNM);
            $dao = new UsuarioDAO();
            $result = $dao -> excluirUsuario($usuario);
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
        
        
        public function alterarUsuario($codigo, $nome, $nick, $unomeComp)
        {
            include '../../Objetos/Usuario.php';
            include '../../Models/UsuarioDAO.php';
            $usuario = new Usuario();
            $usuario -> setNome($nome);
            $usuario -> setUsuario($nick);
            $usuario -> setCodigo($codigo);
            $dao = new UsuarioDAO();
            $result = $dao ->alterarUsuario($usuario, $unomeComp);
            return $result;
            
        }
       
        public function listarUsuarioNome($nome){
            include '../../Objetos/Usuario.php';
            include '../../Models/UsuarioDAO.php';
            $usuario = new Usuario();
            $usuario -> setNome($nome);
            $dao = new UsuarioDAO();
            $result = $dao ->listarUsuarioNome($usuario);
            return $result;
        }
        
        

    }




?>