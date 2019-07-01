<?php

// Array com dados
$tarefa1 = array(
    
    'tarefa'   => 'Lavar carro',
    'dia'      => '2019-06-30',
    'situacao' => 'pendente',
    'prioridade' => 3
);

$tarefa2 = array(
    'tarefa'   => 'Limpar jardim',
    'dia'      => '2019-07-03',
    'situacao' => 'pendente',
    'prioridade' => 2
);

$tarefa3 = array(
    'tarefa'   => 'Limpar CASA',
    'dia'      => '2019-10-03',
    'situacao' => 'pendente',
    'prioridade' => 2
);


// Atribui os 3 arrays para apenas um array
$dados = array($tarefa1, $tarefa2,$tarefa3);
// arsort($dados,'prioridade', 'SORT_DESC');

// Tranforma o array $dados em JSON
$dados_json = json_encode($dados);

// Cria o arquivo cadastro.json
// O parâmetro "a" indica que o arquivo será aberto para escrita

$fp = fopen("tarefas.json", "a");

$escreve = fwrite($fp, $dados_json);

// Fecha o arquivo
fclose($fp);

header("Location: index.php");