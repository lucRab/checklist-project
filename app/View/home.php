
<?php 
  $this->layout('main');
  use App\controller\UsuarioController;
  $checklist = UsuarioController::getChecklist($_SESSION['id']);
  $array = $checklist->fetchALL(PDO::FETCH_OBJ);
  $quantt = sizeof($array) - 1;
  $i = 0;
?>
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
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="p-3 mb-3 bg-transparent"></div>
      <div class="p-3 mb-3 bg-transparent"></div>
      <div class="p-5 mb-6 bg-dark bg-opacity-25 text-white"><h1>Seja bem vindo!</h1></div>
      <div class="p-3 mb-3 bg-transparent"></div> 
      <div class="col">
        <div class="p-3 mb-2 bg-transparent text-dark"></div>
        <div class="p-3 mb-2 bg-transparent text-dark"></div>
        <div class="p-3 mb-2 bg-transparent text-white">
          <div class="card text-bg-dark bg-opacity-75" style="width: 11rem;">
            <div class="card-body">
              <p class="card-text">Ultilize das nossas ferramentas cara criar seus checklists</p>
              <a href="http://localhost/checklist/criar" class="btn btn-primary">Crie já +</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="p-3 mb-2 bg-transparent text-dark"></div>
        <div class="p-3 mb-2 bg-transparent text-white">
          <h2>Seus Checklist</h2>
        </div>
        <?php  if(UsuarioController::getChecklist($_SESSION['id']) == true) {?>
          <div class="row">
          <?php while($i < $quantt) {?>
            <div id="c<?php echo $i?>" class="col mb-3">
              <div class="card bg-dark bg-opacity-75 text-white" style="width: 18rem;">
                <div class="card-header"><h5 class="card-title"><?php echo $array[$i]->name;?></h5></div>
                <div class="card-body bg-secondary bg-opacity-25 text-white">
                  <p class="card-text"><?php echo $array[$i]->descricao;?></p>
                  <button id="ba<?php echo $i?>" class="btn btn-primary">Abrir</button>
                  <button id="be<?php echo $i?>" class="btn btn-danger">Excluir</button>
                </div>
              </div>
            </div>
          <?php $i ++; }?>
          </div>
        <?php }?>
      </div>
     
    </div>
  </div>
  <script type="module" src="app/View/assets/js/navbar.js"></script>
  <script type="module" src="app/View/assets/js/auth.js"></script>