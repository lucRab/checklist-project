const token = localStorage.getItem('token');
var login = 'http://localhost/checklist/';
var cadastro = 'http://localhost/checklist/cadastro';
var home = 'http://localhost/checklist/home';
var perfil = 'http://localhost/checklist/perfil';
var url = window.location.href;

if(localStorage.token === undefined){
    if (url != login && url != cadastro) {
        window.location.replace(login);
    }
  }else{
    if(url != home && url != perfil) {
        window.location.replace(home);
    }
  }

