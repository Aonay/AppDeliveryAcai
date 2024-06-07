<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home | AÇAIDERA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

  #btnOpcoes:hover {
    background-color: orange;
    border-color: orange;
    transition: 0.8s;
  }

  .custom-card-width{
    max-width:75%;
  }
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
          <a href="logout.php">
            <button type="button" name="carrinho" class="btn btn-warning"><i class="bi bi-cart-fill"></i></button>
        </div>
      </div>
      </a>
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

  <div class="container p-2 d-flex justify-content-center">
    <button type="button" class="btn btn-outline me-2" id="btnOpcoes" style="border: solid 2px; border-radius: 10px; border-color: #800893;">Açai 🍨</button>
    <button type="button" class="btn btn-outline me-2" id="btnOpcoes" style="border: solid 2px; border-radius: 10px; border-color: #800893;">Sorvetes 🍦</button>
    <button type="button" class="btn btn-outline me-2" id="btnOpcoes" style="border: solid 2px; border-radius: 10px; border-color: #800893;">Bebidas 🥤</button>
</div>


  <div class="d-flex">
    <div class="card m-1 " style="width: 100%;">
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
      </div>
    </div>
    <div class="card m-1 " style="width: 100%;">
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
      </div>
    </div>
  </div>

  <div class="container p-2">
    <h3>Especiais</h3>
  </div>
  <div class="container">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="imagens/barca.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Barca Especial</h5>
            <p class="card-text">Aproveite esse combo delicioso, com uma barca montada por voçê + 4 diferentes acaís nos copo!</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

      <!-- MODAL LOGIN -->    
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
                  <div class="card mb-3" id="card" style=" border: 0.5px solid; border-radius: 10px;  border-color: #800893;">
                    <div class="row g-0">
                      <div class="col-md-4">

                      </div>
                      <div class="col-md-8">
                      <form action="login.php" method="post">
                          <div class="card-body">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Email:</label>
                              <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="exemplo@email.com.br" style="border-color: #800893;">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Senha:</label>
                              <input type="password" name="senha" class="form-control" id="exampleFormControlTextarea1" placeholder="digite sua senha" style="border-color: #800893;">
                              
                            </div>
                            <div style="text-align: end;">
                              <a href="esquecisenha.php">
                                <p >Esqueceu sua senha?</p>
                              </a>
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

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCadastro" style="background-color: #851895; border-color: white;">Criar Cadastro</button>
            </div>
          </div>
        </div>
      </div>

  <!-- MODAL CADASTRO -->
  <div class="modal fade" id="ModalCadastro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Faça seu Cadastro</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="container d-flex justify-content-center align-items-center">
                <div class="content">
                  <div class="card mb-3" id="card" style="max-width: 540px; border: 0.5px solid; border-radius: 10px;  border-color: #800893;">
                    <div class="row g-0">
                      <div class="col-md-4">

                      </div>
                      <div class="col-md-8">
                      <form action="cadastro.php" method="post">
                          <div class="card-body w-100">
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Nome Completo:</label>
                              <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="exemplo@email.com.br" style="border-color: #800893;">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">CPF:</label>
                              <input type="text" name="cpf" class="form-control" id="exampleFormControlTextarea1" placeholder="digite sua senha" style="border-color: #800893;">                            
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Telefone:</label>
                              <input type="tel" name="telefone" class="form-control" id="exampleFormControlTextarea1" placeholder="digite seu Telefone" style="border-color: #800893;">                            
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Email:</label>
                              <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="exemplo@email.com.br" style="border-color: #800893;">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Senha:</label>
                              <input type="password" name="senha" class="form-control" id="exampleFormControlTextarea1" placeholder="digite sua senha" style="border-color: #800893;">                            
                            </div>
      
 
                            <div class="d-grid gap-2">
                              <button class="btn btn-primary" id="btEnviar" type="submit" name="submit">Enviar</button>
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
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
            </div>
          </div>
        </div>
      </div>

      <!--  -->
      
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>