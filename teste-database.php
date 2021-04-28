<?php


// EM PHP, HOJE EM DIA TEMOS DUAS MANEIRAS DE MANIPULAR BANC DE DADOS.

// MYSQL & PDO.

// CONECTANDO AO BANCO DE DADOS.

const HOST = "localhost";
const USER = "root";
const PASSWORD = "bcd127";
const DATABASE = "dbatividadephp";

// REALIZA A CONEXÃO COM O BANCO DE DADOS
$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die (mysqli_connect_error());

// DECLARAMOS A CONSULTA A SER EXECUTADA
$query = " SELECT * FROM tblTasks ";

// EXECUTAMOS A CONSULTA UTILIZANDO A CONEXÃO CRIADA E RECEBEMOS O RESULTADO
$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

// TRATANDO O ERRO NA CONEXÃO
if($resultado == false){
    echo mysqli_error($conexao);
}

// TRAZENDO A PRIMEIRA LINHA DA TABELA
//$linha1 = mysqli_fetch_array($resultado);

// TRAZENDO A SEGUNDA LINHA DA TABELA
//$linha2 = mysqli_fetch_array($resultado);

// TRAZENDO A TERCEIRA LINHA DA TABELA
//$linha3 = mysqli_fetch_array($resultado);

//echo "A tarefa da linha 1 é :" . $linha1["descricao"];

//echo "<br /><br />";

//echo "A tarefa da linha 2 é :" . $linha2["descricao"];

//echo "<br /><br />";

//echo "A tarefa da linha 3 é :" . $linha3["descricao"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1"> 
        <tr>
            <th>ID</th>
            <th>DESCRIÇÃO</th>
        </tr>
        <?php
            while($linha =mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?= $linha["idItem"] ?></td>
            <td><?= $linha["descricao"] ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>