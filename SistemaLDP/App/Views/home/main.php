<?php
    include '../../Controllers/CapturaController.php';
    $controller = new CapturaController();
    $resultado = $controller-> listarCapturas();
    echo "<div class='table-wrapper'>";
			echo " <table>";
			echo "		<thead>";
			echo "		<tr>";
			echo "		<th>Primeiro nome</th> <th>Segundo nome</th> <th>Email</th> <th>Data</th> <th>Cargo</th><th>Editar</th> ";
			echo "		</tr>";
			echo "	</thead>";
			echo "	<tbody>";
				
			while ($exibe=$resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$exibe['nome1']."</td> ";
				echo "<td>".$exibe['nome2']."</td> ";
				echo "<td>".$exibe['email']."</td>";
				echo "<td>".$exibe['data']."</td>";
                echo "<td>".$exibe['cargo']."</td>";
                

				if($exibe['id'] != null){
//                    echo "<td> <a class='linkExcluir' href='index.php?id=".$exibe['id']."'><i class='fa fa-close'></i></a></td>";
//					echo "<td> <a class='linkExcluir' href='../Controller/edital_Controller.php?id=".$exibe['codEdital']."&teste=1'><i class='fa fa-close'></i></a></td>";
echo "<td> <a class='linkExcluir' href='index.php?id=".$exibe['id']."&first=".$exibe['nome1']."&second=".$exibe['nome2']."&email=".$exibe['email']."&data=".$exibe['data']."&cargo=".$exibe['cargo']."'><i class='fa fa-close'></i>

"?>  <img src="../../img/a.png" alt="Imagem de alterar"> <?php echo "
</a></td>";
                  
					
				}
				echo "</tr>";	
			}	
			echo "</tbody>";
			echo "</table>";
			echo "</div>";

?>