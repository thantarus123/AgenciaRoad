
<form action="" method = "post">

        <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
                    
                    <input type="text" name="nome" class="field" placeholder="Nome" required/> <br>
            
                    <input type="text" name="usuario" class="field" placeholder="Usuário" required/> <br>
                            
            
                    <input type="password" name="senha" class="field" placeholder="Senha" required/> <br>


         </div>
                   <input type="submit" name="submit" value="Enviar"/>
    
    </form>
    
    <?php   
                            

                    
        function clean_input($input)
        {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;

        }
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        { 
            
            
            include '../../Controllers/UsuarioController.php';
            $nome = clean_input($_POST['nome']);
            $nick = clean_input($_POST['usuario']);
            $senha = clean_input($_POST['senha']);
    
            
            $controller = new UsuarioController();
            
//            if($idd == null)
//            {
                $resultado = $controller -> cadastro($nome,$nick,$senha);
                if($resultado)
                {
                    echo 'deu certo';    
                }
                    else
                        echo 'erro';
                }
//            }
//            else
//            {
//                $resultado = $controller -> alterar($id,$nome,$nick,$senha);
//                if($resultado)
//                {
//                    echo 'deu certo';    
//                }
//                    else
//                        echo 'erro';
                
//            }
            
        
            
    ?>
      



