<form action="" method = "post">

        <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
                    
                    <?php 
                    if(!empty(($_GET["nomeUsuario"])))
                    {
                        $usuarioNM = $_GET['nomeUsuario'];
                    }
                    else
                    {
                        $usuarioNM = "";
                    }
            
            
            
                    ?>
            
                    <input type="text" name="nomeUsuario" class="field" <?php printf("value ='$usuarioNM'"); ?>placeholder="Nome de Usuário" required/> <br>
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>


         </div>
                   <input type="submit" name="submit" value="Excluir"/>
    
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
                    $usuarioNM = clean_input($_POST['nomeUsuario']);

                    
                    $controller = new UsuarioController();
                    $resultado = $controller -> excluirUsuario($usuarioNM);
                    if($resultado)
                    {
                        echo 'deu certo';    
                    }
                        else
                            echo 'Usuario incorreto';   
                    }

        ?>