const sair = document.getElementById('sair');
const formtl = document.getElementById('formT');
const xtitulo = document.querySelector('#xtitulo');
const formI = document.getElementById('formI');
const xitem = document.querySelector('#xitem');
const ul = document.querySelector('#ulitem');
var item;
var titems = [];
var i = 0;

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

formI.addEventListener('submit', function(e) {
    e.preventDefault();
    item = [document.querySelector('#nome').value, document.querySelector('#descricao').value];
    const divI = document.createElement('div');
    const divD = document.createElement('div');
    const liI = document.createElement('li');
    const inputI = document.createElement('input',);
    const labelI = document.createElement('label');
    const buttonI = document.createElement('button');

    ul.appendChild(divI);
    divI.appendChild(liI);
    liI.appendChild(inputI);
    liI.appendChild(labelI);
    liI.appendChild(buttonI);
    divI.appendChild(divD);
    
    divI.setAttribute("class", "p-3")
    inputI.classList.add("form-check-input");
    inputI.setAttribute("type", "checkbox");
    labelI.setAttribute("class","form-check-label p-3");
    labelI.setAttribute("for","flexCheckDefault");
    labelI.innerText = item[0];
    buttonI.setAttribute("class", "btn btn-danger");
    buttonI.innerText = "Excluir"
    divD.innerText = "Descrição:" + item[1];

    titems.push(item);
    buttonI.addEventListener("click",() => {
        ul.removeChild(divI);
        titems.indexOf(i);
    });
    i ++;
    
    console.log(titems);
});  

function funcao() {

    console.log('teste');
}

