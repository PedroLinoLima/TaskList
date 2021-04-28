<?php

include("./conexao.php");

switch($_POST["acao"]){

    case  "inserir";

        //se houver uma tarefa a ser inserida, faz a inserção no banco
        if (isset($_POST["tarefa"]) && $_POST["tarefa"] != "") {
            $tarefa = $_POST["tarefa"];
            $sqlInsert = " INSERT INTO tblTasks (descricao) VALUES ('$tarefa') ";

            $resultado = mysqli_query($conexao, $sqlInsert);

            if ($resultado == false){
                $mensagem = "Erro ao criar a tarefa!";
                $tipoMensagem = "erro";
            }else{
                $mensagem = "Tarefa criada com sucesso!";
                $tipoMensagem = "sucesso";
            }

           
        }
        break;

    case "deletar";

        if(isset($_POST["tarefaId"]) && $_POST["tarefaId"] != ""){

            $tarefaId = $_POST["tarefaId"];

            $sqlDelete = "DELETE FROM tblTasks WHERE idItem = $tarefaId";
             
            $resultado = mysqli_query($conexao, $sqlDelete);

            if ($resultado == false){
                $mensagem = "Erro ao deletar a tarefa!";
                $tipoMensagem = "erro";
            }else{
                $mensagem = "Tarefa deletada com sucesso!";
                $tipoMensagem = "sucesso";
            }


            
        }

        break;

        case "editar";

            if(isset($_POST["tarefa"]) && isset($_POST["tarefaId"])){

                $tarefa = $_POST["tarefa"];
                $tarefaId = $_POST["tarefaId"];

                $sqlUpdate = "UPDATE tblTasks SET descricao = '$tarefa' WHERE idItem = $tarefaId";

                $resultado = mysqli_query($conexao, $sqlUpdate);

                if($resultado){
                    $mensagem = "Tarefa editada com sucesso!";
                    $tipoMensagem = "sucesso";
                }else{
                    $mensagem = "Ops, erro ao editar a tarefa!";
                    $tipoMensagem = "erro";
                }

                

            }
            break;

        default:
            die("Ops, ação invalida");
            break;

}

header("location: index.php?mensagem=$mensagem&tipoMensagem=$tipoMensagem");