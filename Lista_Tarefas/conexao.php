<?php

    class Conexao {

        private $host = 'localhost';
        private $dbname = 'php_com_pdo';
        private $user = 'root';
        private $pass = '';

        public function conectar() {

            try {

                $conexao = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);

                return $conexao;
            } catch(PDOException $e) {
                echo '<p>Erro: ' . $e->getCode() . '<br>Mensagem: ' . $e->getMessage() . '</p>';
                echo '<p><br>Linha: ' . $e->getLine() . '<br>Arquivo: ' . $e->getFile() . '</p>';
            }
        }
    }

?>