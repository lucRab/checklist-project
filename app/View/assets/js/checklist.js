const sair = document.getElementById('sair');
const formtl = document.getElementById('formT');
const xtitulo = document.querySelector('#xtitulo');
const formI = document.getElementById('formI');
const xitem = document.querySelector('#xitem');
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

formI.addEventListener('submit', async function dsd(e) {
    e.preventDefault();
    item = [document.querySelector('#nome').value, document.querySelector('#descricao').value];
    xitem.insertAdjacentHTML('beforebegin',
    "<div class="+"'p-3'"+"id="+ i +">"+
            "<input class="+"'form-check-input'"+"type="+"checkbox"+">"+
            "<label class="+"'form-check-label p-3'"+"for="+"flexCheckDefault"+">"+
             item[0]+
            "</label>"+
            "<button class=" + "'btn btn-light'" + "onclick=" +"'function ff()'" + ">" + 
                "Excluir" +
            "</button>" +
        "<div>"+"Descrição: "+item[1]+"</div>"+
    "</div>");
    titems.push(item);
    console.log(titems);
    i ++;
    console.log (i);
});

function ff(){

    console.log('as');
};