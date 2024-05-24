<?php 
  header("refresh: 5.9;./principal.php");
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <style>
    img{
        width: 100%; /* Ajusta a largura da imagem para preencher o contêiner */
        height: auto; /* Mantém a proporção da imagem */
    }
    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }
  </style>
  <body>
    <header>
      <div class="d-flex justify-content-center" >
        <img src="imagens/logo-topo.png" class="img-fluid" alt="logo-topo">
      </div>
    </header>

    <div class="d-flex justify-content-center" >
        <img src="imagens/logo-meio.gif" class="img-fluid" alt="logo-meio">
      </div>

    <footer>
      <div class="d-flex justify-content-center" >
        <img src="imagens/logo-footer.png" class="img-fluid" alt="logo-footer">
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
