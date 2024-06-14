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
                    <a href="index.php"><button type="button" class="btn btn-light "><i class="bi bi-house-fill">Inicio</i></button></a>
                </div>

                <div class="col-6">
                    <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-person-circle"></i></button>

                </div>
            </div>
            </a>
        </div>

    </header>

    <div class="container m-2">
        <h1>Carrinho<i class="bi bi-cart-fill"></i></h1>
    </div>

    <!-- os itens de seleção de produtos devem aparecer na estrutura abaixo atraves do foreach     -->

    <?php
    if ($_POST) {
    ?>
        <div class="card text-sm-start m-1 " style="max-height: 100px;">
            <div class="row">
                <div class="col">
                    <img src="./imagens/acai1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-6">
                    <h5 class="text-sm-start">Açaí Pequeno</h5>
                    <p style="font-size: 11px; ">Amendoim,Granola,Paçoca</p>
                </div>
                <div class="col">
                    <h5>VALOR</h5>
                    <p><b>R$25,00</b></p>
                </div>
            </div>
        </div>
    <?php

    }

    ?>

    <div class="card text-sm-start m-1 " style="max-height: 100px;">
        <div class="row">
            <div class="col">
                <img src="./imagens/acai1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-6">
                <h5 class="text-sm-start">Açaí Pequeno</h5>
                <p style="font-size: 11px; ">Amendoim,Granola,Paçoca</p>
            </div>
            <div class="col">
                <h5>VALOR</h5>
                <p><b>R$25,00</b></p>
            </div>
        </div>
    </div>
    <div class="card text-sm-start m-1 " style="max-height: 100px;">
        <div class="row">
            <div class="col">
                <img src="./imagens/acai1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-6">
                <h5 class="text-sm-start">Açaí Pequeno</h5>
                <p style="font-size: 11px; ">Amendoim,Granola,Paçoca</p>
            </div>
            <div class="col">
                <h5>VALOR</h5>
                <p><b>R$25,00</b></p>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class=" card " style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <div class="text-end"><a href="#" class="btn btn-warning">Go somewhere</a></div>
            </div>
        </div>
    </div>

    <div class="container text-center">
  <div class="row">
    <div class="col align-self-start">
      One of three columns
    </div>

    <div class="col align-self-end">
      One of three columns
    </div>
  </div>
</div>




</body>

</html>