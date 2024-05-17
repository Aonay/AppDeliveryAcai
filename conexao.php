
<?php
/*

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conexao = new PDO("mysql:host=$servername", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql_banco = "CREATE DATABASE IF NOT EXISTS loja; USE loja";
    $conexao->exec($sql_banco);
    
    $sql_tabela = "
        CREATE TABLE IF NOT EXISTS cliente (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(255) NOT NULL,
            preco DECIMAL(10, 2) NOT NULL,
            foto VARCHAR(255) NOT NULL  
        );

        CREATE TABLE IF NOT EXISTS usuario (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(45) NOT NULL,
            email VARCHAR(45) NOT NULL,
            senha VARCHAR(255) NOT NULL 
        )
    ";      
    $conexao->exec($sql_tabela);

    $senha = password_hash("admin123", PASSWORD_DEFAULT);

    $sql = $conexao->prepare("SELECT COUNT(*) FROM usuario WHERE email = 'admin@email.com'");
    $sql->execute();
    $count = $sql->fetchColumn();

    if ($count == 0) {
        $sql_insert_usuario = "INSERT INTO usuario (nome, email, senha) VALUES ('admin', 'admin@email.com', '$senha')";
        $conexao->exec($sql_insert_usuario);
    } 

    // echo "Banco de dados, tabelas e um usuário de exemplo criados com sucesso.";
    
} catch(PDOException $e) {
    echo "Falha na Conexão: " . $e->getMessage();
}
*/
?>
