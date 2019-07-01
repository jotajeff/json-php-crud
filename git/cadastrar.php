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


			<div class="card">
				<div class="card-header">
					<h4>Cadastro de Tarefa</h4>
				</div>

				<div class="card-body">

					<form class="col-12" method="post">

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Tarefa</label>
						<div class="col-sm-10">
							<input type="text=" class="form-control form-control-lg" name="tarefa" placeholder="Título da tarefa" required="">
						</div>
					</div>

					<!-- data  -->

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Data da Tarefa</label>
						<div class="col-sm-10">
							<input class="form-control form-control-lg" type="date" name="dia" placeholder="Escoha a data" required>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Situação</label>
						<div class="col-sm-10">
							<select name="situacao" class="form-control form-control-lg" id="inlineFormCustomSelect">
								<option selected>Escolha a situação</option>
								<option value="pendente">Pendente</option>
								<option value="executada">Executada</option>
							</select>
						</div>
					</div>


					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Prioridade</label>
						<div class="col-sm-10">
							<select name="prioridade" class="form-control form-control-lg">
								<option selected>Escolha o nível </option>
								<option value="1">1 - Baixa</option>
								<option value="2">2 - Média</option>
								<option value="3">3 - Alta</option>
							</select>
						</div>
					</div>


					<div class="form-group text-center">
						<button type="submit" class="btn btn-success btn-lg" id="save" name="save"><i class="material-icons">add_box</i> Cadastrar </button>
					</div>
				</form>


				<?php

				if(isset($_POST['save'])){
					//open the json file
					$data = file_get_contents('tarefas.json');
					$data = json_decode($data);

					//data in out POST
					$input = array(
						
						'tarefa' => $_POST['tarefa'],
						'dia' => $_POST['dia'],
						'situacao' => $_POST['situacao'],
						'prioridade' => $_POST['prioridade']


					);

					//append the input to our array
					$data[] = $input;
					//encode back to json
					$data = json_encode($data, JSON_PRETTY_PRINT);
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