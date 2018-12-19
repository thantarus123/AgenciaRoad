
<form action="" method = "post">

        <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
                    
                    <?php 
                    if(!empty(($_GET["first"])))
                    {
                        $first = $_GET['first'];
                        $email = $_GET['email'];
                    }
                    else
                    {
                        $first = "";
                        $email = "";
                    }
            
            
            
                    ?>
            
                    <input type="text" name="first-name" class="field" <?php printf("value ='$first'"); ?>placeholder="Primeiro nome" required/> <br>
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>        
                    <input type="email" name="email" class="field" <?php printf("value ='$email'"); ?> placeholder="E-mail" required/> <br>
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
            
            
            include '../../Controllers/CapturaController.php';
            $nome1 = clean_input($_POST['first-name']);
           
            $email = clean_input($_POST['email']);
            
            if( filter_var( $email, FILTER_VALIDATE_EMAIL) === false ){
                echo 'mano arruma email';
            }
            else
            {
            $controller = new CapturaController();
            $resultado = $controller -> excluir($nome1,$email);
            if($resultado)
            {
                echo 'deu certo';    
            }
                else
                    echo 'E-mail e/ou nome incorretos';   
            }
            
        }
            
    ?>
      



