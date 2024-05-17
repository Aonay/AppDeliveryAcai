<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home | AÇAIDERA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>

        <div class="text-end">
          <a href="./index.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
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
        <img src="./acaicarr.jpg" class="d-block w-100" alt="1" style="border-radius: 10px;">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="./acaicarr.jpg" class="d-block w-100" alt="2" style="border-radius: 10px;">
      </div>
      <div class="carousel-item">
        <img src="./acaicarr.jpg" class="d-block w-100" alt="3" style="border-radius: 10px;">
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
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
  </div>

  <div class="card m-1" style="width: 10rem;">
    <img src="./acai1.jpg" class="card-img-top" alt="...">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"crossorigin="anonymous"></script>
</body>
</html>