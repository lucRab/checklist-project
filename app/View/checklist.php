<?php $this->layout('main') ?>
<style>
            body {
            background-image: url('app/View/assets/img/bgcriar.gif');
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

  <div class="container">
    <div class="row">
        <div class="p-3 mb-2 bg-transparent text-dark"></div>
        <div class="p-3 mb-2 bg-transparent text-dark"></div>
        <div class="col-sm-2">
            <div class="card mx-auto bg-dark bg-opacity-75 text-white">
                <div class="card-header bg-dark bg-opacity-75">
                    <div class="mb-2 bg-transparent text-white">Opções</div>
                </div>
                <div class="card-boddy">
                    <div class="p-3 mb-2 bg-dark text-white">+ Item</div>
                    <div class="p-3 mb-2 bg-dark text-white">- Item</div>
                    <div class="p-3 mb-2 bg-dark text-white">Editar</div>
                    <div class="p-3 mb-2 bg-dark text-white">Salvar</div>
                    <div class="p-3 mb-2 bg-dark text-white">Excluir</div>
                </div>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="card mx-auto bg-dark bg-opacity-75 text-white">
                <div class="card-header bg-dark bg-opacity-75">
                    <div class="text-white text-center"><h3>Crie seu checklist</h3></div>
                </div>
                <div class="card-boddy">
                    <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Escreva o titulo"/>
                </div>
            </div>
        </div>
    </div>
  </div>