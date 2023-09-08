const sair = document.getElementById('sair');
const formtl = document.getElementById('formT');
const xtitulo = document.querySelector('#xtitulo');
const formI = document.getElementById('formI');
const ul = document.querySelector('#ulitem');
const excluir = document.getElementById('excluir');
const salvar = document.getElementById('salvar');
var titems = {};
var i = 0;
sair.addEventListener('click', async function(e) {
    e.preventDefault();

    localStorage.removeItem('token');
    window.location.replace('http://localhost/checklist/');
});
formtl.addEventListener('submit', async function(e) {
    e.preventDefault();
    const a = document.querySelector('#a').value;
    const b = document.querySelector('#b').value;
    xtitulo.innerText = a;
    titems = {
        "titulo": a,
        "descricao": b
    };
});

formI.addEventListener('submit', function(e) {
    e.preventDefault();
    var item = {
        "nome": document.querySelector('#nome').value,
        "descricao": document.querySelector('#descricao').value,
        "idItem": i
    };
    const divI = document.createElement('div');
    const divD = document.createElement('div');
    const divB = document.createElement('div');
    const liI = document.createElement('li');
    const inputI = document.createElement('input',);
    const labelI = document.createElement('label');
    const buttonDI = document.createElement('button');
    const buttonEI = document.createElement('button');

    ul.appendChild(divI);
    divI.appendChild(liI);
    liI.appendChild(inputI);
    liI.appendChild(labelI);
    liI.appendChild(buttonEI);
    liI.appendChild(buttonDI);
    divI.appendChild(divD);
    divI.appendChild(divB);
    
    divI.setAttribute("class", "p-3")
    divI.setAttribute("id", i);
    inputI.classList.add("form-check-input");
    inputI.setAttribute("type", "checkbox");
    labelI.setAttribute("class","form-check-label p-3");
    labelI.setAttribute("for","flexCheckDefault");
    labelI.innerText = item.nome;
    buttonEI.setAttribute("class", "btn btn-light");
    buttonEI.innerText = "Editar"
    buttonDI.setAttribute("class", "btn btn-danger");
    buttonDI.setAttribute("id", i);
    buttonDI.innerText = "Excluir";
    divD.innerText = "Descrição: " + item.descricao;

    titems[i] = item;
    buttonDI.addEventListener("click",(event) => {
        ul.removeChild(divI);
        console.log(event.target.id);
        titems[event.target.id] = undefined;
    });
    buttonEI.addEventListener("click",() =>{
        const inputEditn = document.createElement('input');
        const inputEditd = document.createElement('input');
        const buttonEdit = document.createElement('button');
        inputEditn.setAttribute("placeholder", "Nome");
        buttonEdit.setAttribute("class", "btn btn-success");
        buttonEdit.innerText = "Salvar";
        while(liI.firstChild ) {
    
            inputEditn.appendChild(liI.firstChild );
        }
        liI.parentNode.replaceChild(inputEditn, liI);
        divD.parentNode.replaceChild(inputEditd, divD);
        divB.parentNode.replaceChild(buttonEdit, divB);
        buttonEdit.addEventListener('click', () => {
            if(inputEditn.value)item.nome = inputEditn.value;
            inputEditn.parentNode.replaceChild(liI, inputEditn);
            liI.appendChild(inputI);
            liI.appendChild(labelI);
            liI.appendChild(buttonEI);
            liI.appendChild(buttonDI);
            labelI.innerText = item.nome;
            if(inputEditd.value)item.descricao = inputEditd.value;
            inputEditd.parentNode.replaceChild(divD, inputEditd);
            divI.appendChild(divD);
            divD.innerText = "Descrição: " + item.descricao;
            buttonEdit.parentNode.replaceChild(divB, buttonEdit);
        });
    })
    
    i ++;
    
    console.log(titems);
});  

excluir.addEventListener('click', () => {
    if(confirm('Deseja mesmo excluir o checklist ?') == true) {
        window.location.replace('http://localhost/checklist/home');
    }
});
salvar.addEventListener('click', async function(e) {
    let json;

    const response = await fetch('http://localhost/checklist/checklistcreate', {
        method:'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            id: id, item: titems,
        })
    });
    //json = await response.json();
    //console.log(json);
});
var a;