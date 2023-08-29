const perfil = document.getElementById('perfil');

perfil.addEventListener('click', async function(e) {
    e.preventDefault();

    window.location.replace('http://localhost/checklist/perfil');
});