
<!-- Lugar das Variavis PHP/ inicio//-->
<?php
    $nome = file('nome.txt');
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
        <?php
            $tabela = fopen('filmes.csv', 'r');
            while (true) {
                $valor = fgets($tabela);
                if($valor === false){
                    break;
                }
                $item = explode(',', $valor);
                echo "<tr>";
                foreach ($item as $key) {
                    echo "<td>" . $key . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    <a href="ListaFilmes.html"> Adicionar filmes</a>





</body>
</html>
