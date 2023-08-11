    <?php $this->layout('main') ?>
        <style>
            body {
            background-image: url('app/View/assets/img/backgroud.gif');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            }
        </style>
        <div class = "container  pt-5  my-5">
            <div class="row">
                <div class="col">
                    <div class="card mx-auto bg-dark bg-opacity-50 text-white" style="width: 35rem;">
                        <form id="formcadastro">
                            <div class="card-body ">  
                            <h1 class="card-title text-center">SISTEMA CHECKLIST</h1>
                                <h2 class="card-title mb-2 mt-4 text-center" style="font-size: 35px;">Faça o seu registro</h2>
                                <div class="form mb-3 mt-4">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input id="nome" type="text" class="form-control" placeholder="Informe seu nome"/>
                                </div>
                                <div class="form mb-3 mt-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" type="text" class="form-control" placeholder="Informe seu email"/>
                                </div>
                                <div class="form mb-3 mt-4">
                                    <label for="username" class="form-label">Usuario</label>
                                    <input id="username" type="text" class="form-control" placeholder="Informe seu usuario"/>
                                </div>
                                <div class="form mb-3 mt-4">
                                    <label for="senha" class="form-label">Senha</label>
                                    <input id="senha" type="text" class="form-control " placeholder="crie sua senha"/>
                                </div>
                                    <div class="mb-3 mt-4 text-center">
                                    <button type="submit" class="btn btn-light">cadastrar</button>
                                </div>
                                <p class="card-link mb-3 mt-4 text-center">                            
                                    <a class="link-opacity-50" href="http://localhost/checklist/">Já tem conta?</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script type="module" src="app/View/assets/js/cadastro.js"></script>
