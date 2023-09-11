<?php $this->layout('main');
  use App\controller\UsuarioController;
  $data = new stdClass;
  $data->id = $_SESSION['id'];
  $get = UsuarioController::getUser($data);
  $teste = $get->fetch();?>
<style>
            body {
            background-image: url('app/View/assets/img/bghome.gif');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            }
        </style>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-75 fixed-top">
    <a class="navbar-brand fw-lighter fs-3" href="#">Checklist</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item" id="home">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item" id="perfil">
          <a class="nav-link" href="#">Perfil</a>
        </li>
        <li class="nav-item" id="sair">
          <a class="nav-link" href="#">
            Sair
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col">
      <div class="p-3 mb-2 bg-transparent text-dark"></div>
          <div class="p-3 mb-2 bg-transparent text-dark"></div>
          
        <div class="card bg-transparent">
          <div class="card-header bg-dark bg-opacity-75">
            <div class="p-3 mb-2 bg-transparent text-white">
              <h2>Seus Dados</h2>
            </div>
          </div>
          <div class="card-body">
            <div class="p-3 mb-2 bg-transparent text-white">
              <h4>Nome</h4><?php echo $teste['name']?>
            </div>
            <div class="p-3 mb-2 bg-transparent text-white">
              <h4>Username</h4><?php echo $teste['username'] ?>
            </div>
              
            <div class="p-3 mb-2 bg-transparent text-white">
              <h4>Email </h4><?php echo $teste['email']?>
            </div>
            
              
            
          </div>
        </div>
      </div>
    <div>
  </div>
  <div class="container text-center">
    <div class="row">
        <div class="col">
          <div class="p-3 mb-2 bg-transparent text-dark"></div>
          <div class="p-3 mb-2 bg-transparent text-dark"></div>
          <div class="p-3 mb-2 bg-transparent text-dark"></div>
          <div class="card mx-auto bg-dark bg-opacity-75 text-white" style="width: 40rem;">  
            <div class="card-header bg-dark bg-opacity-75">  
              <div class="p-3 mb-2 bg-transparent text-white">
                <h2>Atualize seus dados</h2>
              </div>
            </div>
              <form id="atualizar">  
                <div class="mb-2 mt-2">  
                  <label for="basic-url" class="form-label text-white">Seu Nome</label>
                  <div class="input-group">
                  <input type="text" id="nome" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1">
                  </div>
                        
                </div> 

                <div class="mb-3 mt-4">
                  <label for="basic-url" class="form-label text-white">Usuario e Email</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" id="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    <input type="text" id="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@Email</span>
                  </div>
                </div>   
                <div class="mb-2 mt-2">
                  <label for="basic-url" class="form-label text-white">Senha</label>
                        
                  <input type="text" id="senha" class="form-control" placeholder="senha" aria-label="senha">
                </div>
                  <div class="input-group mb-3">
                    <input type="text" id="consenha" class="form-control" placeholder="confirmar senha" aria-label="confirmar senha">
                  </div>
                </div>
                <div class="text-danger"  id="alert">
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-light btn-lg">Atualizar</button>
                </div>
              </form>
            </div>
        </div>
    </div>
  </div>
<script type="module" src="app/View/assets/js/auth.js"></script>
<script type="module" src="app/View/assets/js/perfil.js"></script>
<script type="module" src="app/View/assets/js/navbar.js"></script>