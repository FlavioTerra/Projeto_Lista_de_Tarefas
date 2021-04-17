<?php

    // CRUD
    class TarefaService {
        
        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa) {
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }

        public function inserir() { // CREATE
            $query = "insert into tb_tarefas (tarefa) values (:tarefa)";

            $stmt = $this->conexao->prepare($query);

            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));

            $stmt->execute();
         }

        public function recuperar() { // READ
            $query = "select t.id, s.status, tarefa from tb_tarefas t inner join tb_status s on s.id = t.id_status;";

            $stmt = $this->conexao->prepare($query);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function atualizar() { // UPDATE

        }

        public function remover() { // DELETE

        }
    }

?>