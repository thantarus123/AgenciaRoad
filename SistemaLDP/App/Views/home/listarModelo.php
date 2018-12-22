<div class="table-wrapper">
    <table>
        <thead>
            <th>Nome Modelo</th>
            <th>Assunto</th>
            <th>Alterar</th>
            <th>Excluir</th>
            <th>Visualizar</th>
        </thead>
        
        <tbody>
            <?php
                include '../../Controllers/ModeloController.php';
                $controller = new ModeloController();
                $resultado = $controller-> listarModelos();
                
                while ($exibe=$resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$exibe['nome']."</td> ";
				echo "<td>".$exibe['assunto']."</td> ";
                if($exibe['id'] != null){
                    
					echo "<td> <a class='linkAlterar' href='cadastrarModelo.php?id=".$exibe['id']."&nome=".$exibe['nome']."&assunto=".$exibe['assunto']."&conteudo=".$exibe['conteudo']."'><i class='fa fa-close'></i>"?>  <img src="../../img/a.png" alt="Imagem de alterar"> <?php echo "
                    </a></td>";
                    
                    /*echo "<td> <a class='linkExcluir' href='excluirModelo.php?nomeUsuario=".$exibe['NM_Usuario']."'><i class='fa fa-close'></i>"?>  <img src="../../img/trash.png" alt="Imagem de Excluir"> <?php echo "
                    </a></td>";*/
                    
                    echo "<td> <a class='linkVisualizar' href='visualizarModelo.php?id=".$exibe['id']."'><i class='fa fa-close'></i>"?>  <img src="../../img/trash.png" alt="Imagem de Excluir"> <?php echo "
                    </a></td>";
                }
				echo "</tr>";	
			}	
            ?>
        </tbody>
    </table>
</div>