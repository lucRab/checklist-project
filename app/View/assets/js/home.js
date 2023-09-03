const perfil = document.getElementById('perfil');
const sair = document.getElementById('sair');

perfil.addEventListener('click', async function(e) {
    e.preventDefault();

    window.location.replace('http://localhost/checklist/perfil');
});

sair.addEventListener('click', async function(e) {
    e.preventDefault();

    localStorage.removeItem('token');
    window.location.replace('http://localhost/checklist/');
});
