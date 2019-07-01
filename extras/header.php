<head>
	
	<meta charset="utf-8">
	<meta lang="pt-br">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title> Controle de Tarefas </title>

	<!-- CSS -->

	<link rel="stylesheet" href="extras/css/bootstrap.min.css">

	<link rel="stylesheet" href="extras/css/style.css">

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- JS -->

	
	<script language="Javascript">
		function confirmacao(index) {
			var resposta = confirm("Deseja remover esse registro?");

			if (resposta == true) {
				window.location.href = "excluir.php?index="+index;
			}
		}
	</script>

</head>
