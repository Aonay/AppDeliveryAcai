<?php
require "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senha_entrada = $_POST['senha'];

    if (!empty($email) && !empty($senha_entrada)) {
        try {
            $sql = "SELECT cd_senha_cliente FROM CLIENTE WHERE nm_email_cliente=:email"; 
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($resultado && password_verify($senha_entrada, $resultado['cd_senha_cliente'])) {
                // Login bem-sucedido, redireciona para a página principal
                header('Location: principal.php');
                exit;
            } else {
                // Senha inválida
                echo '<div class="container d-flex justify-content-center align-items-center">
                        <p style="color: red;">Usuário ou senha inválidos!</p>
                      </div>';
            }
        } catch (PDOException $e) {
            // Erro de conexão com o banco de dados
            echo '<div class="container d-flex justify-content-center align-items-center">
                    <p style="color: red;">Erro ao conectar ao banco de dados!</p>
                  </div>';
        }
    } else {
        // Campos de email ou senha vazios
        echo '<div class="container d-flex justify-content-center align-items-center">
                <p style="color: red;">Por favor, preencha todos os campos!</p>
              </div>';
    }
}
?>

?>