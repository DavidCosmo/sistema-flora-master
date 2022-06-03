<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/bootstrap/bootstrap.css">
    <title>Flora Fogaça - Login</title>
</head>
<body>
    <div class="container-flex">
    <div class="row">
        <div class="col m-0 p-0">
            <img src="../assets/img/login/alexandra-gorn-NzsTFFB6Ng8-unsplash.jpg" alt="" width="98.5%">
        </div>
        <div class="col align-items-center d-flex">
            <form action="../model/cadastrar.php" method="POST">
                
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                    <input type="password" name="senha" class="form-control" id="inputPassword3">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control" id="inputPassword3">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sobrenome</label>
                    <div class="col-sm-10">
                    <input type="text" name="sobrenome" class="form-control" id="inputPassword3">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">CPF</label>
                    <div class="col-sm-10">
                    <input type="text" name="cpf" class="form-control" id="inputPassword3">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                        </label>
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
    </div>

    <script src="../vendor/bootstrap/bootstrap.js"></script>
</body>
</html>