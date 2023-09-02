const home = document.getElementById('home');
const sair = document.getElementById('sair');
const perfil = document.getElementById('perfil');
const formtl = document.getElementById('formtl');
const xtitulo = document.querySelector('#xtitulo');
var titulo;
home.addEventListener('click', async function(e) {
    e.preventDefault();

    window.location.replace('http://localhost/checklist/home');
});
perfil.addEventListener('click', async function(e) {
    e.preventDefault();

    window.location.replace('http://localhost/checklist/perfil');
});

sair.addEventListener('click', async function(e) {
    e.preventDefault();

    localStorage.removeItem('token');
    window.location.replace('http://localhost/checklist/');
});
formtl.addEventListener('submit', async function(e) {
    e.preventDefault();
    const t = document.querySelector('#titulo').value;
    titulo = t;
    xtitulo.innerText = t;
    console.log(t);
});