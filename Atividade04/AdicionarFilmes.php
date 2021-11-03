<?php

$IP = $_POST['IP'];
$Nome = $_POST['Nome'];
$Genero = $_POST['Genero'];
$Data_lancamento = $_POST['Data_lancamento'];
$Diretores = $_POST['Diretores'];

$file = fopen ('filmes.csv', 'a');
fwrite($file, "$IP,$Nome,$Genero,$Data_lancamento,$Diretores\n");

?>

<h2>Novo Filme</h2>


<p>Nome: <?= $Nome?> </p>
<p>Gênero: <?= $Genero ?> </p>
<p>Data de lençamento: <?= $Data_lancamento ?> </p>
<p>Diretor(a): <?= $Diretores ?> </p>

<p>A perte <a href="index.php">aqui</a> para ver todos os filmes</p>