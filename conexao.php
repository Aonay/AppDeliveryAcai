<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conexao = new PDO("mysql:host=$servername", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql_banco = "CREATE DATABASE IF NOT EXISTS acai; USE acai";
    $conexao->exec($sql_banco);
    
    $sql_tabela = "
    create or TABLE CLIENTE (
        cd_cliente INT AUTO_INCREMENT PRIMARY KEY,
        nm_cliente VARCHAR (100) NOT NULL,
        cd_telefone_cliente VARCHAR (13) NOT NULL,
        nm_email_cliente VARCHAR(100) NOT NULL,
        cd_cpf_cliente CHAR (11) NOT NULL,
        cd_senha_cliente VARCHAR(100) NOT NULL  
    )
    ";      
    $conexao->exec($sql_tabela);

    $senha = password_hash("admin123", PASSWORD_DEFAULT);

    $sql = $conexao->prepare("SELECT COUNT(*) FROM CLIENTE WHERE nm_email_cliente = 'Admin@email.com'");
    $sql->execute();
    $count = $sql->fetchColumn();

    if ($count == 0) {
        $sql_insert_usuario = "INSERT INTO CLIENTE (cd_cliente, nm_cliente, cd_telefone_cliente, nm_email_cliente, cd_cpf_cliente, cd_senha_cliente)
        VALUES (0, 'Administrador', '13991742722', 'Admin@email.com', '52884364899', '$senha')";
        $conexao->exec($sql_insert_usuario);
    } 

    echo "Banco de dados, tabelas e um usuário de exemplo criados com sucesso.";
    
} catch(PDOException $e) {
    echo "Falha na Conexão: " . $e->getMessage();
}