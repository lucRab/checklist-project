const form2 =document.getElementById('formcadastro');

form2.addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(form2);
    const user = document.querySelector('#username').value;
    const senha = document.querySelector('#senha').value;
    const nome = document.querySelector('#nome').value;
    const email = document.querySelector('#email').value;
    const alerta = document.querySelector('#alert');
    let json;
    try {
        const response = await fetch('http://localhost/checklist/token/cadastro', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                user: user, senha: senha,
                nome: nome, email: email
            })
        });
        json = await response.json();
        if (!response.ok) throw new Error(response.status);
        localStorage.setItem('token', json);
        window.location.replace('http://localhost/checklist/home');
    } catch(error) {
        //alert('erro');
        alerta.innerText = json;
    }    
});
