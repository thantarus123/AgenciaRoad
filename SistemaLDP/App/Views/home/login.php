
<form action="" method = "post">

        <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
                    
            
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
            $nome = clean_input($_POST['usuario']);
            $senha = clean_input($_POST['senha']);
    
            
            $controller = new UsuarioController();
            $resultado = $controller -> verificarLogin($nome,$senha);
            if($resultado)
            {
                echo 'Ola '.$nome;
                header("Location:main.php?nome='$nome'");
            }
                else
                    echo 'Usuário e/ou senha inválidos';
            }
            
        
            
    ?>
      



