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
                    <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-person-circle"></i></button>

                </div>
            </div>
            </a>
        </div>

    </header>

    <div class="container m-2">
        <h1 class="text-center">Carrinho <i class="bi bi-cart-fill"></i></h1>
    </div>

    <!-- os itens de seleção de produtos devem aparecer na estrutura abaixo atraves do foreach     -->

    <?php
if ($_POST) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $itens = isset($_POST['item']) ? implode(', ', $_POST['item']) : '';

    // Exibindo os itens selecionados no carrinho
    ?>
    <div class="card text-sm-start m-1 mt-4" style="max-height: 100px;">
        <div class="row">
            <div class="col">
                <img src="./imagens/acai1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-6">
                <h5 class="text-sm-start"><?php echo $titulo; ?></h5>
                <p style="font-size: 14px;"><?php echo $itens; ?></p>
            </div>
            <div class="col">
                <h5>VALOR</h5>
                <p><b><?php echo $preco; ?></b></p>
            </div>
        </div>
    </div>
    <?php
}

$valor_numerico = floatval(str_replace('R$ ', '', $preco));
$total = $valor_numerico + 10;
?>

<div class="d-flex justify-content-center" style="margin-top: 350px">
    <div class="card mt-5" style="width: 20rem;">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="card-text m-0">Sub-Total:</h6>
                <div class="text-end"><?php echo $preco; ?></div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="card-text m-0">Frete:</h6>
                <div class="text-end">R$ 10,00</div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="card-text m-0">Cupom-Desconto:</h6>
                <div class="text-end">R$ 0,00</div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h3 class="card-text m-0">Total:</h3>
                <h4><div class="text-end">R$ <?php echo $total; ?>,00</div></h4>
            </div>
            <br>
            <div class="text-center"><a href="#" class="btn btn-warning">Finalizar pedido</a></div>
        </div>
    </div>
</div>


    <div class="container text-center">
  <div class="row">
    <div class="col align-self-start">
      
    </div>

    <div class="col align-self-end">
      
    </div>
  </div>
</div>




</body>

</html>