<?php 

$IP = $_GET['IP'];

$conteudo = ' ';

$file = fopen("filmes.csv", "r");

while ($linha = fgets($file)) {
    $partes = explode(',', $linha);
    if ($partes[0] != $IP) {
        $conteudo = $conteudo . $linha;
    }
}

file_put_contents('filmes.csv', $conteudo);

header("location: index.php");


?>