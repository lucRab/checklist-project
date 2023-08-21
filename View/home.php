
<?php $this->layout('main') ?>
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
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
           <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container text-center">
    <div class="row">
      <div class="p-3 mb-3 bg-transparent"></div>
      <div class="p-3 mb-3 bg-transparent"></div>
      <div class="p-5 mb-6 bg-dark bg-opacity-25 text-white"><h1>Seja bem vindo!</h1></div>
      <div class="p-3 mb-3 bg-transparent"></div> 
    <div class="col-sm-9">
      <div class="p-3 mb-2 bg-transparent text-dark"></div>
      <div class="p-3 mb-2 bg-transparent text-white"><h2>Seus Checklist</h2></div>
      <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
      <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
      <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
      <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
    </div>
    <div class="col">
      <div class="p-3 mb-2 bg-transparent text-dark"></div>
      <div class="p-3 mb-2 bg-transparent text-dark"></div>
      <div class="p-3 mb-2 bg-transparent text-white">Crie + </div>
      <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
      <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
      <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
      <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
    </div>
    </div>
  </div>

