<?php
require "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $telefone =  $_POST["telefone"];
    $email = $_POST["email"];
    $senha_entrada = $_POST["senha"];

    if (!empty($nome) && !empty($cpf) && !empty($email) && !empty($senha_entrada)) {
        try {
            $senha_hash = password_hash($senha_entrada, PASSWORD_DEFAULT);

            require "conexao.php";
            $sql = "INSERT INTO CLIENTE (nm_cliente, cd_cpf_cliente, cd_telefone_cliente, nm_email_cliente, cd_senha_cliente)
            VALUES (:nome, :cpf, :telefone, :email, :senha)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha_hash);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conexao = null;
    }
}

?>