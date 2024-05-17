<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<style>
    #card {
        border-color: orange;
        
    }

    #btEnviar {
        background-color: orangered;
        border-color: orangered;

    }

    #btEnviar:hover {
        background-color: orange;
        border-color: orange;
    }
</style>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 250px;">
        <div class="content">
            <div class="card mb-3" id="card" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="uploads/logo3.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <form action="" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="exemplo@email.com.br">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Senha:</label>
                                    <input type="password" name="senha" class="form-control" id="exampleFormControlTextarea1" placeholder="digite sua senha">
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" id="btEnviar" type="submit" name="submit">Entrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>

<?php



// if ($_POST) {
//     $email = $_POST['email']; // Corrigido para pegar o valor do campo 'email'
//     $senha_entrada = $_POST['senha'];

//     if (!empty($email) && !empty($senha_entrada)) {

//         try {
//             require "conexao.php";

//             // Usando declaração preparada para evitar injeção de SQL
//             $sql = $conexao->prepare("SELECT * FROM usuario WHERE email=:email");
//             $sql->bindParam(':email', $email);
//             $sql->execute();

//             if ($sql->rowCount() == 1) {

//                 $row = $sql->fetch();
//                 $senha_cripto = $row['senha'];
//                 $usuario = $row['nome'];

//                 // Corrigindo a ordem dos argumentos na função password_verify()
//                 if (password_verify($senha_entrada, $senha_cripto)) {
//                     echo "Senha correta";

//                     session_start();
//                     $_SESSION['usuario'] = $usuario;
//                     $_SESSION['hora'] = time();
//                     header('Location: cadastro.php');
//                 } else {
//             ?>
//                     <div class="container d-flex justify-content-center align-items-center">
//                         <p style="color: red;">Usuário ou senha inválidos!</p>
//                     </div>
//             <?php
//                 }
//             } else {
//                 ?>
//                 <div class="container d-flex justify-content-center align-items-center">
//                     <p style="color: red;">Usuário ou senha inválidos!</p>
//                 </div>
//         <?php
//             }

//             $conexao = null;
//         } catch (PDOException $e) {
//             ?>
//             <div class="container d-flex justify-content-center align-items-center">
//                 <p style="color: red;">Usuário ou senha inválidos!</p>
//             </div>
// <?php
//         }
//     }
// }






?>