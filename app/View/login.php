<!DOCTYPE html>
<html>
    <header>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Login</title>
    </header>
    <body>
        <style>
            body {
            background-image: url('assets/img/backgroud.gif');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            }
        </style>
        <div class = "container text-center pt-5  my-5">
            <div class="row">
                <div class="col bg-dark bg-opacity-50 text-white">
                    <h1><br>SISTEMA CHECKLIST</h1>
                    <br><img src="assets/img/logo.png" class="rounded" alt="Cinque Terre">
                </div>
                <div class="col">
                    <div class="card mx-auto bg-dark bg-opacity-75 text-white" style="width: 35rem;">
                        <form>
                            <div class="card-body ">        
                                <h2 class="card-title mb-3 mt-5" style="font-size: 35px;">Olá!</h2>
                                <div class="form-floating mb-3 mt-4">
                                    <input id="username" type="text" class="form-control" placeholder="Informe seu usuario"/>
                                    <label for="username" class="form-label text-dark">Usuario</label>
                                </div>
                                <div class="form-floating mb-3 mt-4">
                                    <input id="senha" type="text" class="form-control " placeholder="Informe sua senha"/>
                                    <label for="senha" class="form-label text-dark">Senha</label>
                                </div>
                                    <div class="mb-3 mt-4">
                                    <button type="submit" class="btn btn-light btn-lg">Logar</button>
                                </div>
                                <p class="card-link mb-3 mt-4">
                                    Sem conta?
                                    <a class="link-opacity-50" href="cadastro.php">Cadastre-se</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>