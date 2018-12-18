
<form action="" method = "post">

        <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
                    
                    
            
                    <input type="text" name="first-name" class="field" placeholder="Segundo nome" required/> <br>
                            
                    <input type="email" name="email" class="field" placeholder="E-mail" required/> <br>
                             
                    


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
      



