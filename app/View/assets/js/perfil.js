const home = document.getElementById('home');
const atualizar = document.getElementById('atualizar');

home.addEventListener('click', async function(e) {
    e.preventDefault();

    window.location.replace('http://localhost/checklist/home');
});

atualizar.addEventListener('submit', async function(e) {
  e.preventDefault();
  const user = document.querySelector('#username').value;
  const senha = document.querySelector('#senha').value;
  const name = document.querySelector('#nome').value;
  const email = document.querySelector('#email').value;
  const consenha = document.querySelector('#consenha').value;
 
    const response = await fetch('http://localhost/checklist/atualizar', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({user: user, senha: senha, email: email, name: name})
    });
    const json = JSON.stringify(await response.json());
    console.log(json);
  
});