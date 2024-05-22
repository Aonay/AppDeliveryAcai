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
</style>

<body>

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start p-3 text-bg" style="background-color: #5A0267;">



        <div class="container text-end">
            <div class="row justify-content-between">

                <div class="col-4">
                    <a href="principal.php"><button type="button" class="btn btn-light "><i class="bi bi-house-fill">Inicio</i></button></a>
                </div>

            </div>
        </div>
    </header>

    <div class="m-2 p-2 border rounded">

        <form action="#" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Digite seu endereço de E-mail para receber um link de redefinção de senha:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary  mb-3" name="enviar">Enviar</button>
            </div>
            

        </form>

    </div>

</body>

</html>