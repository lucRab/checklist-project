const form = document.getElementById('formlogin');

form.addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(form);
    const user = document.querySelector('#username').value;
    const senha = document.querySelector('#senha').value;
    const alerta = document.querySelector('#alert');
    let json;
    try {
        const response = await fetch('http://localhost/checklist/token', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({user: user, senha: senha})
        });
        json = await response.json();
        if (!response.ok) throw new Error(response.status);
        localStorage.setItem('token', json);
        window.location.replace('http://localhost/checklist/home');
    } catch(error) {
         //alert(json);
        alerta.innerText = json;
    }     
});


