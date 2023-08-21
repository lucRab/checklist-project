let token = localStorage.getItem('token') ? localStorage.getItem('token').length : null;
var login = 'http://localhost/checklist/';
var cadastro = 'http://localhost/checklist/cadastro';
var home = 'http://localhost/checklist/home';
var url = window.location.href;

if(localStorage.token === undefined){
    if (url != login && url != cadastro) {
        window.location.replace(login);
    }
  }else{
    if(url != home) {
        window.location.replace(home);
    }
  }
  