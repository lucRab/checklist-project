    <?php $this->layout('main') ?>
        <style>
            body {
            background-image: url('app/View/assets/img/backgroud.gif');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            }
        </style>
        <div class = "container text-center pt-5  my-5">
            <div class="row">
                <div class="col bg-dark bg-opacity-50 text-white">
                    <h1><br>SISTEMA CHECKLIST</h1>
                    <br><img src="app/View/assets/img/logo.png" class="rounded" alt="Cinque Terre">
                </div>
                <div class="col">
                    <div class="card mx-auto bg-dark bg-opacity-75 text-white" style="width: 35rem;">
                        <form id="form">
                            <div class="card-body ">        
                                <h2 class="card-title mb-3 mt-5" style="font-size: 35px;">Olá!</h2>
                                <div class="form-floating mb-3 mt-4">
                                    <input id="username" name="username" type="text" class="form-control" placeholder="Informe seu usuario"/>
                                    <label for="username" class="form-label text-dark">Usuario</label>
                                </div>
                                <div class="form-floating mb-3 mt-4">
                                    <input id="senha" name="senha" type="text" class="form-control " placeholder="Informe sua senha"/>
                                    <label for="senha" class="form-label text-dark">Senha</label>
                                </div>
                                    <div class="mb-3 mt-4">
                                    <button type="submit" class="btn btn-light btn-lg">Logar</button>
                                </div>
                                <p class="card-link mb-3 mt-4">
                                    Sem conta?
                                    <a class="link-opacity-50" href="http://localhost/checklist/cadastro">Cadastre-se</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script type="module" src="app/View/assets/js/logincadastro.js"></script>

