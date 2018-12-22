
<form action="" method = "post">

        <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
            <?php 
                    if(!empty(($_GET["id"])))
                    {
                        $tipo = $_GET['tipo'];
                        $id = $_GET['id'];
                        $pnome = $_GET['nomePessoa'];
                        $unome = $_GET['nomeUsuario'];
                    }
                    else
                    {
                        $id = "";
                        $pnome = "";
                        $unome = "";
                        $tipo = 0;
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
                    <?php
                        if($tipo!=1){
                            echo "<input type='password' name='senha' class='field' placeholder='Senha'  required />";
                            if(!empty($nomeErro)):
            
                            echo $nomeErro;
                            endif;
                            echo "<br>";
                        }
                    ?>
                    


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
            
            
            $controller = new UsuarioController();
            if(empty(($_GET['id'])))
            {
                $senha = clean_input($_POST['senha']);
                $resultado = $controller -> cadastro($pnome, $unome, $senha);
                if($resultado)
                {
                    echo 'deu certo';    
                }
                    else{
                        echo 'erro';
                }
            }
            else{
                $unomeComp = $_GET['nomeUsuario'];
                $resultado = $controller -> alterarUsuario($id, $pnome, $unome, $unomeComp);
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
      



