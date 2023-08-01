const form = document.getElementById('form');


form.addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(form);
    //const data = Object.fromEntries(formData);
    const user = document.querySelector('#username').value;
    const senha = document.querySelector('#senha').value;
    let json;
   
    const response = await fetch('http://localhost/checklist/app/controller/token.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({user: user, senha: senha})
    });
    json = await response.json();
    console.log(json);     
});

