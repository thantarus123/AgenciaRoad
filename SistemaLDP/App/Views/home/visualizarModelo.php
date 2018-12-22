
<form action="" method = "post">

        <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
            
    <?php   
             
            require '../../phpmailer/Exception.php';
            require '../../phpmailer/PHPMailer.php';
            require '../../phpmailer/SMTP.php';
            // Usar as classes sem o namespace
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;



                        
                    
 

        if($_SERVER['REQUEST_METHOD'] == 'GET')


        { 
            
            $id = NULL;
            $nomeModelo = NULL;
            $assuntoModelo = NULL;
            $conteudoModelo = NULL;
            include '../../Controllers/ModeloController.php';
            $controller = new ModeloController();
            if(!empty(($_GET['id'])))
            {
    
                $id = $_GET['id'];
                $resultado = $controller -> listarPorId($id);
                if($resultado)
                {
                       
                    while ($exibe=$resultado->fetch_assoc()){
                       $nomeModelo = $exibe['nome'];
                       $assuntoModelo = $exibe['assunto'];
                       $conteudoModelo = $exibe['conteudo'];



               

                $resultado = $controller -> listarPorId($id);
                if($resultado)
                {
                    echo 'deu certo';    
                    while ($exibe=$resultado->fetch_assoc()){
                       $nomeModelo = $exibe['nome'];
                       $assuntoModelo = $exibe['assunto'];
                       $conteudoModelo = $exibe['conteudo'];
                        }
                }
                            else{
                                echo 'erro';
                        }
                    }
                    
                }
                    else{
                        echo 'erro';
                }
            }
            
            
        }
          
                           

                            
                        
                       
                        else
                        {  echo $_SERVER['REQUEST_METHOD'];
//                            $nome = clean_input($_POST['nome']);
//                            $email = clean_input($_POST['email']);
//                            $mensagem = clean_input($_POST['mensagem']);
//                            $telefone = clean_input($_POST['telefone']);
//                            $data = clean_input($_POST['data']);
//                            $numpessoas = clean_input($_POST['numpessoas']);


//                                $texto_msg = 'E-mail enviado do sistema de reservas do site'. '<br><br>'.
//                                'Nome: ' .$nome . '<br>' . 
//                                'E-mail: ' .$email . '<br>' . 
//                                'Telefone: ' .$telefone . '<br>' . 
//                                'Data: ' .$data . '<br>' . 
//                                'Número de pessoas: ' .$numpessoas . '<br>' . 
//                                'Mensagem: ' .$mensagem . '<br>';

                                // Criação do Objeto da Classe PHPMailer
                                $mail = new PHPMailer(true); 
                                $mail ->CharSet="UTF-8";


                                
                                    
                                    include '../../Controllers/CapturaController.php';
                                    $controller = new CapturaController();
                                    $resultado = $controller -> listarCapturasEmail();
                         
                                    while ($exibe=$resultado->fetch_assoc())
                                    { 
                                        
                                        try {
                                    
                                            //Retire o comentário abaixo para soltar detalhes do envio 
                                            // $mail->SMTPDebug = 2;                                

                                            // Usar SMTP para o envio
                                            $mail->isSMTP();                                      

                                            // Detalhes do servidor (No nosso exemplo é o Google)
                                            $mail->Host = 'smtp.gmail.com';

                                            // Permitir autenticação SMTP
                                            $mail->SMTPAuth = true;                               

                                            // Nome do usuário
                                            $mail->Username = 'cursophpmailer123@gmail.com';        
                                            // Senha do E-mail         
                                            $mail->Password = 'madafa18';                           
                                            // Tipo de protocolo de segurança
                                            $mail->SMTPSecure = 'tls';   

                                            // Porta de conexão com o servidor                        
                                            $mail->Port = 587;


                                            // Garantir a autenticação com o Google
                                            $mail->SMTPOptions = array(
                                                'ssl' => array(
                                                    'verify_peer' => false,
                                                    'verify_peer_name' => false,
                                                    'allow_self_signed' => true
                                                )
                                            );

                                            // Remetente
                                            $mail->setFrom('joao.madeira16@hotmail.com', 'Rafa do madeira');

                                                // Destinatário
                                            $mail->addAddress($exibe['email'], $exibe['nome1']);

                                            // Conteúdo

                                            // Define conteúdo como HTML
                                            $mail->isHTML(true);                                  

                                            // Assunto
                                            $mail->Subject = $_POST['assunto'];
                                            $mail->Body    = $_POST['conteudo'];
                                            $mail->AltBody = $_POST['conteudo'];

                                            // Enviar E-mail
                                            $mail->send();
                                            $confirmacao = 'Mensagem enviada com sucesso';
                                        } 
                                        catch (Exception $e) {
                                        $confirmacao ='A mensagem não foi enviada';
                                        }
                                        
                                    }
                                    
                                    


                        }
            
                        

    ?>
            
            
            
                   
                    <input type="hidden" name="id" class="field" <?php printf("value ='$id'");?> placeholder="id"  required /> 
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>    
                    
                    <input type="text" name="nome" class="field" <?php printf("value ='$nomeModelo'");?> placeholder="Nome do modelo"  required /> 
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>
                
                    <input type="text" name="assunto" class="field" <?php printf("value ='$assuntoModelo'");?> placeholder="Assunto"  required /> 
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>
            
                    <textarea type="text" name="conteudo" class="field"  placeholder="Conteudo"  required><?php printf($conteudoModelo);?></textarea> 
                    <?php if(!empty($nomeErro)): ?>
                    <?php echo $nomeErro;?>
                    <?php endif;?>
                    <br>


         </div>
                   <input type="submit" name="submit" value="Enviar"/>
    
    </form>
    
  
                            

                        














