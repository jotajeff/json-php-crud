<?php 
require_once('../conexao.php');
require_once('../seguranca.php');
ini_set('default_charset','UTF-8');
session_start();
protegePagina();
?>

<?php include("extras/header.php"); ?>

<?php include("extras/menu.php"); ?> 

<div class="container">

	<div class="row">

		<div class="col-12">


			<?php

			// Atribui o conteúdo do arquivo para variável $arquivo
			$arquivo = file_get_contents('tarefas.json');


			// Decodifica o formato JSON e retorna um Objeto
			$json = json_decode($arquivo);

			?>

			<table class="table-responsive">

				<table class="table table-hover table-striped table-bordered table-dark col-12">

					<thead class="text-center">
						<tr>
							<th>Tarefa</th>
							<th>Data</th>
							<th>Situação</th>
							<th>Prioridade</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>

						<?php

	                    // Loop para percorrer o Objeto

						$index = 0;
						foreach($json as $registro){


							echo "

							<tr>

							<td>".$registro->tarefa."</td>

							<td class='text-center'>".date('d/m/Y',strtotime($registro->dia))."</td>";

						//  echo "<td align='center'>".date('d/m/Y', strtotime($value['data']))."</td>";

							if($registro->situacao == 'pendente'){

								echo "<td class='text-center text-warning'>".$registro->situacao."</td>";

							}else {

								echo "<td class='text-center'>".$registro->situacao."</td>";

							}

							echo "
							<td class='text-center'>".$registro->prioridade."</td>

							<td class='text-center'>
							<a href='editar.php?index=".$index."'>
							<i class='material-icons'>autorenew</i>
							</a>
							<a href='deletar.php?index=".$index."'>
							<i class='material-icons'>delete</i>
							</a>
							</td>
							</tr>
							";


							$index++;
						}

						?>

						<?php echo "<tr><td colspan='5' class='text-right font-italic'>Total de Evento(s) : ".count($json)."</td></tr>"; ?>


					</tbody>


				</table>

			</table>

			<div class="alert alert-primary" role="alert">
				<strong> Legenda da Prioridade : 1 - baixa , 2 - média , <span class="text-warning"> 3 - ALTA</span></strong>
			</div>

		</div>


	</div>
	<!-- fecha row -->

</div> 
<!-- fecha container -->

<?php include("extras/footer.php"); ?>




