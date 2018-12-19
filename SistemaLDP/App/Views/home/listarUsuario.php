<div class="table-wrapper">
    <table>
        <thead>
            <th>Nome Pessoa</th>
            <th>Nome de Usuario</th>
            <th>Alterar</th>
        </thead>
        
        <tbody>
            <?php
                include '../../Controllers/UsuarioController.php';
                $controller = new UsuarioController();
                $resultado = $controller-> listarUsuarios();
                
                while ($exibe=$resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$exibe['NM_Pessoa']."</td> ";
				echo "<td>".$exibe['NM_Usuario']."</td> ";
                if($exibe['ID_Usuario'] != null){
//                    echo "<td> <a class='linkExcluir' href='index.php?id=".$exibe['id']."'><i class='fa fa-close'></i></a></td>";
//					echo "<td> <a class='linkExcluir' href='../Controller/edital_Controller.php?id=".$exibe['codEdital']."&teste=1'><i class='fa fa-close'></i></a></td>";
                    echo "<td> <a class='linkAlterar' href='cadastrarUsuario.php?id=".$exibe['ID_Usuario']."&nomePessoa=".$exibe['NM_Pessoa']."&nomeUsuario=".$exibe['NM_Usuario']."&senha=".$exibe['Senha']."'><i class='fa fa-close'></i>

                    "?>  <img src="../../img/a.png" alt="Imagem de alterar"> <?php echo "
                    </a></td>";
                }
				echo "</tr>";	
			}	
            ?>
        </tbody>
    </table>
</div>