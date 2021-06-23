<?php

    require "../../Lista_Tarefas/tarefa.model.php";
    require "../../Lista_Tarefas/tarefa.service.php";
    require "../../Lista_Tarefas/conexao.php";

    // Verifica se a variável $acao já esta setada com 'recuperar' ou com 'recuperarPendentes' caso contrário
    // a variável $acao é setada com o parametro passado pela global $_GET['acao']
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao; 

    if($acao == 'inserir') { // Variavel $acao setada no arquivo nova_tarefa.php
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);

        $tarefaService->inserir();

        header('Location: index.php?inclusao=1');

    
    } else if($acao == 'recuperar') { // Variavel $acao setada no arquivo todas_tarefas.php
        $tarefa = new Tarefa();

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        
        $lista_tarefas = $tarefaService->recuperar(); 
    
    } else if($acao == 'atualizar') { // Variavel $acao setada no arquivo script.js
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_POST['id'])
               ->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);

        if($tarefaService->atualizar()) {
            header('Location: ' . $_GET['pag'] . '.php');
        }
    
    } else if($acao == 'remover') { // Variavel $acao setada no arquivo script.js
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);

        $tarefaService->remover();

        header('Location: ' . $_GET['pag'] . '.php');

    } else if ($acao == 'marcarRealizada') { // Variavel $acao setada no arquivo script.js
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id'])->__set('id_status', 2);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);

        $tarefaService->marcarRealizada();
        
        header('Location: ' . $_GET['pag'] . '.php');

    } else if ($acao == 'recuperarPendentes') { // Variavel $acao setada no arquivo index.php
        $tarefa = new Tarefa();
        $tarefa->__set('id_status', 1);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        
        $lista_pendentes = $tarefaService->recuperarTarefasPedentes();
    }
?>