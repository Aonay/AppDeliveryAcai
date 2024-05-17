<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home | AÇAIDERA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<style>

    #btEnviar {
        background-color: #800893;
        border-color: #460450;
        
    }

    #btEnviar:hover {
        background-color: orange;
        border-color: orange;
    }

    #btnOpcoes:hover{
      background-color: orange;
      border-color: orange;
      transition: 0.8s;
    }
</style>


<body>
  <header class="p-3 text-bg" style="background-color: #5A0267;" >
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>

        <div class="text-end">
        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" >Login</button>
          <a href="logout.php">
            <button type="button" name="sair" class="btn btn-warning">Carrinho</button>
          </a>
        </div>
      </div>
    </div>
  </header>

  <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 p-2" role="search">
    <input type="search" class="form-control form-control-dark text-bg-white" placeholder="Buscar..." aria-label="Search">
  </form>

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="padding: 5px;">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="imagens/slide3.jpg" class="d-block w-100" alt="1" style="border-radius: 10px;">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="imagens/slide2.jpg" class="d-block w-100" alt="2" style="border-radius: 10px;">
      </div>
      <div class="carousel-item">
        <img src="imagens/slide1.jpg" class="d-block w-100" alt="3" style="border-radius: 10px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container p-2">
    <button type="button" class="btn btn-outline me-2" id="btnOpcoes" style="border: solid 2px; border-radius: 10px; border-color: #800893;" >Açai &#127848</button>
    <button type="button" class="btn btn-outline me-2" id="btnOpcoes" style="border: solid 2px; border-radius: 10px; border-color: #800893;">Sorvetes &#127846</button>
    <button type="button" class="btn btn-outline me-2" id="btnOpcoes" style="border: solid 2px; border-radius: 10px; border-color: #800893;">Bebidas &#129380</button>
  </div>

  <div class="card m-1" style="width: 10rem;">
    <img src="imagens/acai1.jpg" class="card-img-top" alt="...">
      <div class="card-body p-1">
        <h5 class="card-title">Açaí P</h5>
        <p class="card-text">300g de acaí</p>

        <div class="row justify-content-center">
          <div class="col-8">
          <h2>R$ 15,00</h2>
          </div>
        <div class="col-4 ">
          <a href="#" class="btn btn-danger">+</a>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Faça seu Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        
        <div class="container d-flex justify-content-center align-items-center">
        <div class="content">
            <div class="card mb-3" id="card" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <form action="" method="post" >
                            <div class="card-body" style="border: 0.5px solid; border-radius: 10px;  border-color: #800893;">
                                <div class="mb-3" >
                                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="exemplo@email.com.br" style="border-color: #800893;">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Senha:</label>
                                    <input type="password" name="senha" class="form-control" id="exampleFormControlTextarea1" placeholder="digite sua senha" style="border-color: #800893;">
                                </div> 
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" id="btEnviar" type="submit"  name="submit">Entrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
          <button type="button" class="btn btn-primary" style="background-color: #851895; border-color: white;" >Criar Cadastro</button>
        </div>
      </div>
    </div>
  </div>


    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"crossorigin="anonymous"></script>
</body>
</html>