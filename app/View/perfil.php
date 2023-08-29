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
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
           <li>
              <hr class="dropdown-divider"></hr>
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
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
            <div class="p-3 mb-2 bg-transparent text-dark"></div>
            <div class="p-3 mb-2 bg-transparent text-white">
                <h2>Seus Checklist</h2>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>

            <div class="mb-3">
              <label for="basic-url" class="form-label">Your vanity URL</label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
              </div>
              <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">$</span>
              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
              <span class="input-group-text">.00</span>
            </div>

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Username" aria-label="Username">
              <span class="input-group-text">@</span>
              <input type="text" class="form-control" placeholder="Server" aria-label="Server">
            </div>

            <div class="input-group">
              <span class="input-group-text">With textarea</span>
              <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
        </div>
    </div>
  </div>
<script type="module" src="app/View/assets/js/auth.js"></script>