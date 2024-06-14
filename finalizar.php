<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | AÇAIDERA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>

</style>



<body>

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start p-3 text-bg" style="background-color: #5A0267;">
    <div class="container text-end">
      <div class="row justify-content-between">

        <div class="col-4">
          <a href="principal.php"><button type="button" class="btn btn-light "><i class="bi bi-house-fill">Inicio</i></button></a>
        </div>

        <div class="col-6">
          <?php
          session_start();
          if (isset($_SESSION['usuario'])) {
            $email = $_SESSION['usuario'];
          ?>

              <a href="logout.php?nome=exit"><button type="button" name="exit" value="exit" class="btn btn-danger me-2"><i class="bi bi-box-arrow-right"></i></button></a>

            <a href="#">
              <button type="button" name="carrinho" class="btn btn-warning"><i class="bi bi-cart-fill"></i></button>
            </a>
            <p style="color: yellow;"><?php echo $email; ?> </p>

          <?php
          } else {
          ?>
            <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-person-circle"></i></button>
            <a href="#">
              <button type="button" name="carrinho" class="btn btn-warning"><i class="bi bi-cart-fill"></i></button>
            </a>
        </div>

      <?php
          }

      ?>

      </div>

    </div>

  </header>

    <div class="container mt-5">
        <h1 class="text-center" style="color: #5A0267; font-size: 40px;">Pedido Realizado com sucesso!</h1>
    </div>
    <div class="container d-flex justify-content-center">
        <img src="./imagens/check.png" alt="Confirmado" class="img-fluid">
    </div>
    <div class="container mt-2">
        <h1 class="text-center" style="color: #5A0267; font-size: 50px; ">Obrigado!</h1>
    </div>

      
    </body>

    