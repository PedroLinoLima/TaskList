<?php

    require("./conexao.php");

    $tarefaId = $_GET["tarefaId"];

    $sqlSelect = "SELECT * FROM tblTasks WHERE idItem = $tarefaId ";

    $resultado = mysqli_query($conexao, $sqlSelect);

    $tarefa = mysqli_fetch_array($resultado);

    if(!$tarefa){
        die("Impossível editar, tarefa não encontrada.");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="styles-global.css" />
</head>

<body>
    <div class="content">
       
        <h1>Editar Tarefa</h1>
        <form method="POST" action="taskActions.php">
            <input type="hidden" name="acao" value="editar" />
            <input type="hidden" name="tarefaId" value="<?= $tarefa["idItem"] ?>" />
            <div class="input-group">
                <label class="label" for="tarefa">Descrição da tarefa</label>
                <input type="text" value="<?= $tarefa["descricao"] ?>" name="tarefa" id="tarefa" placeholder="Digite a tarefa" required />
            </div>
            <button>Editar</button>
        </form>
    </div>

</body>

</html>