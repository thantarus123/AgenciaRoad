
<form action="" method = "post">

        <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
            <?php 
                    if(!empty(($_GET["id"])))
                    {
                        $id = $_GET['id'];
                        $pnome = $_GET['nome'];
                        $passunto = $_GET['assunto'];
                        $pconteudo = $_GET['conteudo'];
                    }
                    else
                    {
                        $id = "";
                        $pnome = "";
                        $passunto = "";
                        $pconteudo = "";
                    }
            
            
            
                    ?>
                    <input type="hidden" name="id" class="field" <?php printf("value ='$id'");?> placeholder="id"  required /> 
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>    
                    
                    <input type="text" name="nome" class="field" <?php printf("value ='$pnome'");?> placeholder="Nome do modelo"  required /> 
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>
                
                    <input type="text" name="assunto" class="field" <?php printf("value ='$passunto'");?> placeholder="Assunto"  required /> 
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>
            
                    <textarea type="text" name="conteudo" class="field"  placeholder="Conteudo"  required><?php printf($pconteudo);?></textarea> 
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
            
            
            include '../../Controllers/ModeloController.php';
            $nomeModelo = clean_input($_POST['nome']);
            $assuntoModelo = clean_input($_POST['assunto']);
            $conteudoModelo = clean_input($_POST['conteudo']);
            $controller = new ModeloController();
            if(empty(($_GET['id'])))
            {
                $resultado = $controller -> cadastro($nomeModelo,$assuntoModelo,$conteudoModelo);
                if($resultado)
                {
                    echo 'deu certo';    
                }
                    else{
                        echo 'erro';
                }
            }
            else{
                $resultado = $controller -> alterar($id, $nomeModelo,$assuntoModelo,$conteudoModelo);
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
      



