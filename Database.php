<?php

class Database {

    public $conn;
    public $userDB = "pma";
    public $passwordDB = "";
    public $users = array();
    public $passwords = array();

    function connect() {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=sistema_cadastro", $this->userDB, $this->passwordDB);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Conexão falhou: " . $e->getMessage();
        }
    }

    function readLogin() {
        try {
            $this->connect();
            $sql = "SELECT * FROM credenciais";
            $result = $this->conn->query($sql)->fetchAll();
            if ($result == false) {
                echo "Ainda não há usuários e senhas criados. Peça para o desenvolvedor inseri-los no banco de dados.";
            } else {
                foreach ($result as $index => $row) {
                    $this->users[$index] = $row['usuario'];
                    $this->passwords[$index] = $row['senha'];
                }
            }
        } catch (PDOException $e) {
            echo "Não foi possível ler as informações do banco de dados.";
        };
        $this->conn = null;
    }

    function createJogador($nome, $equipe, $idade) {
        $this->connect();
        $sql = "INSERT INTO jogadores (nome, equipe, idade)
        VALUES ('$nome', '$equipe', '$idade')";
        // use exec() because no results are returned
        $this->conn->exec($sql);
        echo "Jogador criado com sucesso!";
        $this->conn = null;
    }

    function readJogadores() {
        try {
            $this->connect();
            $sql = "SELECT nome, equipe, idade FROM jogadores";
            $result = $this->conn->query($sql)->fetchAll();
            if ($result == false) {
                echo "Ainda não há nenhum jogador criado!";
            } else {
                foreach ($result as $row) {
                    echo '<p style="margin: 0 30px">' . $row["nome"] . " | " . $row['equipe'] . " | " . $row['idade'] . " anos." . "</p><br>";
                }
            }
        } catch (PDOException $e) {
            echo "Não foi possível ler as informações do banco de dados.";
        };
        $this->conn = null;
    }

}

$db = new Database();

?>