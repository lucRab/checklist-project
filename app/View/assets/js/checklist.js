const home = document.getElementById('home');
const sair = document.getElementById('sair');
const perfil = document.getElementById('perfil');
const formtl = document.getElementById('formT');
const xtitulo = document.querySelector('#xtitulo');
const formI = document.getElementById('formI');
var titulo;
var item
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
    const a = document.querySelector('#a').value;
    xtitulo.innerText = a;
    titulo = a;
    console.log(titulo);
});

formI.addEventListener('submit', async function(e) {
    e.preventDefault();
    item = item + [document.querySelector('#nome').value, document.querySelector('#descricao').value];
    console.log(item);

});