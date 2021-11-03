
<!-- Lugar das Variavis PHP/ inicio//-->
<?php
    $nome = file('nome.txt');
    $filmes = fopen('filmes.csv', 'r');
?>


<!-- Lugar das Variavis PHP/ Fim//-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 04</title>
</head>
<body>
    <h1>Lista de Nomes</h1>

    <ol>
        <?php foreach ($nome as $NOME): ?>
            <li><strong> <?= $NOME ?> </strong></li>
            <?= '<br>' ?>
        <?php endforeach ?>
    </ol>
    <h1>Melhores filmes(Minha opnião)</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Gênero</th>
            <th>Data de lançamento</th>
            <th>Diretor(a)</th>
        </tr>
        <?php while ($linha = fgets($filmes)): ?>
        <tr>
            <?php $partes = explode(",", $linha)  ?>
            <?php foreach($partes as $dado): ?>
            <td> 
                <?= $dado ?> 
            </td>
            <?php endforeach ?>
            <td>
                <a href="delete.php?IP=<?=$partes[0] ?>">deletar</a>
            </td>
        </tr>
        <?php endwhile ?>
    </table>
    <a href="ListaFilmes.html"> Adicionar filmes</a>





</body>
</html>
