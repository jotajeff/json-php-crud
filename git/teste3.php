<?php 
require_once('../conexao.php');
require_once('../seguranca.php');
ini_set('default_charset','UTF-8');
session_start();
protegePagina();
?>

<!DOCTYPE html>
<?php include("extras/header.php"); ?>

<?php include("extras/menu.php"); ?> 

<div class="container">

	<div class="row">

		<div class="col-12">

			<div class="jumbotron">

				<h4>Pendência / Situação </h4>



				<?php 

				$data[] = array('tarefa' => 'Lavar carro', 'situacao' => 'pendente', "prioridade"=>"2");

				$data[] = array('tarefa' => 'Estudar prova', 'situacao' => 'pendente', "prioridade"=>"3");

				$data[] = array('tarefa' => 'Estudar prova', 'situacao' => 'pendente', "prioridade"=>"1");


				$data[] = array('tarefa' => 'Fazer compras', 'situacao' => 'pendente', "prioridade"=>"3");


				$data[] = array('tarefa' => 'Lavar roupas', 'situacao' => 'executada', "prioridade"=>"2");

				$data[] = array('tarefa' => 'Calibrar pneus', 'situacao' => 'executada', "prioridade"=>"1");



				foreach ($data as $key => $row) { 

					$prioridade[$key] = $row['prioridade']; 

				}

				array_multisort($prioridade, SORT_DESC, $data); 

			// print_r($data);

				echo "<table class='table'>";

				foreach($data as $a){ 

					if($a['situacao'] == 'pendente'){

						echo "<tr><td>Tarefa : $a[tarefa] </td><td> Situação : $a[situacao] </td><td>  Prioridade : $a[prioridade]</td></tr>"; 

					} 
				}

				echo "</table>";

				?> 


			</div>
			<!-- fim jumbo -->

		</div>

	</div>	</div>

	<?php  include('extras/footer.php'); ?>

</body>
</html>