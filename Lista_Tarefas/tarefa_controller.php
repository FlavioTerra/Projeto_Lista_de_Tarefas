<?php

    require "../../Lista_Tarefas/tarefa.model.php";
    require "../../Lista_Tarefas/tarefa.service.php";
    require "../../Lista_Tarefas/conexao.php";

    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService();

?>