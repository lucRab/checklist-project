const idcheck = localStorage.getItem('checklist');
const opcao = document.getElementById('opcao');
let json;
const response = await fetch('http://localhost/checklist/cl/dctoken', {
  method: 'POST',
  headers: {
    Authorization: 'Bearer' + idcheck,
  },
});

opcao.addEventListener('click', async function (event) {

  const id = event.target.parentNode.id;
  if(event.target.id == "be") {
    if(confirm('Deseja mesmo excluir o checklist ?') == true) {
      const response = await fetch('http://localhost/checklist/delete', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json'
          },
          body: JSON.stringify({id:id})
      });
      window.location.replace('http://localhost/checklist/home');
    }
  }
  if(event.target.id == "edit") {
    window.location.replace('http://localhost/checklist/editar');
  }
});
