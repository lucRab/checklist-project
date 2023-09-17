<?php $this->layout('main');
  use App\controller\ChecklistController;
  $idchecklist = intval($_SESSION['idChecklist']);
  $name = ChecklistController::getChecklist($idchecklist);
  $array = ChecklistController::getItem($idchecklist);
  $quantt = sizeof($array) - 1;
  $i = 0;
 ?>
<style>
  body {
    background-image: url('app/View/assets/img/bgcl.jpeg');
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
    <div class="container ">
        <div class="row justify-content-center">
            <div class="p-3 mb-3 bg-transparent"></div>
            <div class="p-3 mb-3 bg-transparent"></div>
            <div class="col">
              <?php if($_SESSION['idChecklist']) {?>
                <div class="card bg-dark bg-opacity-75 text-white">
                    <div class="card-header text-center"><h5 class="card-title"><?php echo $name[0]->name ?></h5></div>
                    <div class="card-body bg-secondary bg-opacity-25 text-white">
                    <?php if($array != null) {?>
                      <?php while($i < $quantt) {?>
                      <p class="card-text">
                        <input class="form-check-input" type="checkbox"></input>
                        <label class="form-check-label p-3" for="flexCheckDefault"><?php echo $array[$i]->nome_item ?></label>
                        <div><?php echo $array[$i]->descricao_item ?></div>
                      </p>
                      <?php $i++;} ?>
                    <?php }?>
                        <?php echo $name[0]->descricao ?>
                    </div>
                </div>
              <?php }else { ?>
                <h1 class="text-white"><?php echo "Atualize a página porfavor"; ?> </h1>
              <?php } ?>
            </div>
            <div class="p-3 mb-3 bg-transparent"></div>
        </div>
    </div>
<script type="module" src="app/View/assets/js/navbar.js"></script>
<script type="module" src="app/View/assets/js/auth.js"></script>
<script type="module" src="app/View/assets/js/viewChck.js"></script>
