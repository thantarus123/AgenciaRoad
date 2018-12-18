
<form action="" method = "post">

        <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
                    <?php 
             if(!empty(($_GET["id"]))){
                            $pnome = $_GET['first'];
                            $snome = $_GET['second'];
                            $email2 = $_GET['email'];
                            $data2 = $_GET['data'];
                            $cargo2 = $_GET['cargo'];
                            $id = $_GET['id'];
                
                }
            else
            {
                $pnome="";
                $id = "";
                $snome = "";
                $email2 = "";
                $data2 = "";
                $cargo2 = "";
            }
            
            
            
                    ?>
                  
                    <input type="hidden" name="id" class="field" <?php printf("value ='$id'");?> placeholder="Primeiro nome"  required /> <?php if(!empty($nomeErro)): ?>
            <?php echo $nomeErro;?>
            <?php endif;?><br>
                    <input type="text" name="first-name" class="field" <?php printf("value ='$pnome'");?> placeholder="Primeiro nome"  required /> <?php if(!empty($nomeErro)): ?>
            <?php echo $nomeErro;?>
            <?php endif;?><br>
        
            
                    <input type="text" name="second-name" class="field" <?php printf("value ='$snome'");?> placeholder="Segundo nome" required/> <?php if(!empty($nomeErro)): ?>
            <?php echo $nomeErro;?>
            <?php endif;?> <br>
                            
                    <input type="email" name="email" class="field" <?php printf("value ='$email2'");?> placeholder="E-mail" required/> <?php if(!empty($nomeErro)): ?>
            <?php echo $nomeErro;?>
            <?php endif;?> <br>
                             
                    <input type="date" name="data" class="field" <?php printf("value ='$data2'");?> placeholder="Data de nascimento" required/> <?php if(!empty($nomeErro)): ?>
            <?php echo $nomeErro;?>
            <?php endif;?> <br>
            
                    <input type="text" name="cargo" class="field" <?php printf("value ='$cargo2'");?> placeholder="Ocupação/Cargo" required/> <?php if(!empty($nomeErro)): ?>
            <?php echo $nomeErro;?>
            <?php endif;?> <br>


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
            
            
            include '../../Controllers/CapturaController.php';
            $nome1 = clean_input($_POST['first-name']);
            $nome2 = clean_input($_POST['second-name']);
            $email = clean_input($_POST['email']);
            $data = clean_input($_POST['data']);
            $cargo = clean_input($_POST['cargo']);
            if( filter_var( $email, FILTER_VALIDATE_EMAIL) === false ){
                echo 'mano arruma email';
            }
            else
            {
                if(empty(($_GET["id"])))
                {
                    $controller = new CapturaController();
                    $resultado = $controller -> cadastro($nome1,$nome2,$email,$data,$cargo);
                    if($resultado)
                        echo 'cadastro deu certo';    
                    
                    else
                        echo 'cadastro erro';
                    
                }
                else
                {
                    $controller = new CapturaController();
                    //$resultado = $controller -> alterar(($_GET["id"]),$pnome,$snome,$email2,$data2,$cargo2);
                    
                    $resultado = $controller -> alterar($id,$nome1,$nome2,$email,$data,$cargo);
                    if($resultado)
                         header("Location:main.php?");  
                    else
                        echo 'alteracao erro';
                     
                }
            
            
            }
        }
            
    ?>