 <?php 
require_once('../conexao.php');
require_once('../seguranca.php');
ini_set('default_charset','UTF-8');
session_start();
protegePagina();
?> 

<?php

// Recebe o index do registro via GET
$index = $_GET['index'];

//busca os dados de JSON tarefas.json
$data = file_get_contents('tarefas.json');
$data_array = json_decode($data);

// Busca o registro pelo index
$row = $data_array[$index];

?>

<!DOCTYPE html>
<?php include("extras/header.php"); ?>

<?php include("extras/menu.php"); ?> 

<div class="container">

	<div class="row">

		<div class="col-12">


			<div class="card">
				<div class="card-header">
					<h4>Alterar Tarefa</h4>
				</div>

				<div class="card-body">

					<form class="col-12" method="post">

						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Tarefa</label>
							<div class="col-sm-10">
								<input type="text=" class="form-control form-control-lg" name="tarefa" value="<?php echo $row->tarefa; ?>">
							</div>
						</div>


						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Data</label>
							<div class="col-sm-10">
								<input type="date" class="form-control form-control-lg" name="dia" value="<?php echo $row->dia; ?>">
							</div>
						</div>


						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Situação</label>
							<div class="col-sm-10">
								<select name="situacao" class="form-control form-control-lg" name="situacao" value="<?php echo $row->situacao; ?>">
									<option selected><?php echo $row->situacao; ?></option>
									<option value="pendente">Pendente</option>
									<option value="executada">Executada</option>
									
								</select>
							</div>
						</div>


						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Prioridade</label>
							<div class="col-sm-10">
								<select name="prioridade" class="form-control form-control-lg" name="prioridade" value="<?php echo $row->prioridade; ?>">
									<option selected><?php echo $row->prioridade; ?></option>
									<option value="1">1 - Baixa</option>
									<option value="2">2 - Média</option>
									<option value="3">3 - Alta</option>
								</select>
							</div>
						</div>

						<div class="form-group text-center">
							<button type="submit" class="btn btn-warning btn-lg" id="save" name="save"><i class="material-icons">autorenew</i> Atualizar </button>
						</div>

					</form>

					<?php
					if(isset($_POST['save'])){

						// set de valor alteradors 
						$input = array(
							
							'tarefa' => $_POST['tarefa'],
							'dia' => $_POST['dia'],
							'situacao' => $_POST['situacao'],
							'prioridade' => $_POST['prioridade'],

						);

						// atualiza o index / registro selecionado
						$data_array[$index] = $input;

						//encode back to json
						$data = json_encode($data_array, JSON_PRETTY_PRINT);
						file_put_contents('tarefas.json', $data);

						header('location: index.php');
					}
					?>

				</div>

			</div>


		</div>
		<!-- fecha col -->

	</div>
	<!-- fecha row -->

</div> 
<!-- fecha container -->



<?php include("extras/footer.php"); ?>


</body>
</html>