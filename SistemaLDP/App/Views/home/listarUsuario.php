<input type="text" name="pesquisaUsuario" onkeypress="pesquisarUsuario" placeholder="Digite nome do usuário"/>
<div class="table-wrapper">
    <table>
        <thead>
            <th>Nome Pessoa</th>
            <th>Nome de Usuario</th>
            <th>Alterar</th>
            <th>Excluir</th>
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
                    
					echo "<td> <a class='linkAlterar' href='cadastrarUsuario.php?id=".$exibe['ID_Usuario']."&nomePessoa=".$exibe['NM_Pessoa']."&nomeUsuario=".$exibe['NM_Usuario']."&tipo=".(1)."'><i class='fa fa-close'></i>"?>  <img src="../../img/a.png" alt="Imagem de alterar"> <?php echo "
                    </a></td>";
                    
                    echo "<td> <a class='linkExcluir' href='excluirUsuario.php?nomeUsuario=".$exibe['NM_Usuario']."'><i class='fa fa-close'></i>"?>  <img src="../../img/trash.png" alt="Imagem de Excluir"> <?php echo "
                    </a></td>";
                }
				echo "</tr>";	
			}	
            ?>
        </tbody>
    </table>
</div>