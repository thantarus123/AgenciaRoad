
<form action="" method = "post">

        <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
            <?php 
                    if(!empty(($_GET["id"])))
                    {
                        $id = $_GET['id'];
                        $pnome = $_GET['nomePessoa'];
                        $unome = $_GET['nomeUsuario'];
                        $senha = $_GET['senha'];
                    }
                    else
                    {
                        $id = "";
                        $pnome = "";
                        $unome = "";
                        $senha = "";
                    }
            
            
            
                    ?>
                    <input type="hidden" name="id" class="field" <?php printf("value ='$pnome'");?> placeholder="Primeiro nome"  required /> 
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>    
                    
                    <input type="text" name="nome" class="field" <?php printf("value ='$pnome'");?> placeholder="Nome"  required /> 
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>
                
                    <input type="text" name="usuario" class="field" <?php printf("value ='$unome'");?> placeholder="Usuário"  required /> 
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>
            
                    <input type="password" name="senha" class="field" <?php printf("value ='$senha'");?> placeholder="Senha"  required /> 
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>


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
            $pnome = clean_input($_POST['nome']);
            $unome = clean_input($_POST['usuario']);
            $senha = clean_input($_POST['senha']);
            $controller = new UsuarioController();
            if(empty(($_GET['id'])))
            {
                $resultado = $controller -> cadastro($pnome,$unome,$senha);
                if($resultado)
                {
                    echo 'deu certo';    
                }
                    else{
                        echo 'erro';
                }
            }
            else{
                $resultado = $controller -> alterarUsuario($id, $pnome,$unome,$senha);
                if($resultado)
                {
                    echo 'deu certo';    
                }
                    else{
                        echo 'erro';
                }
            }
            
        }
            
        
            
    ?>
      



