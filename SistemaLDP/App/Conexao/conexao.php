
<?php
	// Exemplo de conexão com banco de dados MySql e consulta 
        $server = 'sql136.main-hosting.eu';
        $user = 'u204053349_lddes';
        $password = 'acesso?roadtech';
        $db_name = 'u204053349_lddes';
			
			$conexao =  mysqli_connect ($server, $user, $password, $db_name);
			
			if(mysqli_connect_error()){
				die('Erro no banco na conexao'.mysqli_connect_error());
				exit();
			}
?>