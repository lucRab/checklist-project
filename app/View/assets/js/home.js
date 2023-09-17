const check = document.getElementById('checklists');

check.addEventListener('click', async function(event) {

    const id = event.target.parentNode.parentNode.parentNode.id;
    const div = document.getElementById(id);
    if(event.target.id == "be") {
        div.innerHTML = "";
        const response = await fetch('http://localhost/checklist/delete', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({id:id})
        });
    }
    if(event.target.id == "ba") {
        let json;
        const response = await fetch('http://localhost/checklist/cl/token', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({id:id})
        });
        json = await response.json();
        localStorage.setItem('checklist', json);
        window.location.replace('http://localhost/checklist/visualizar');
    }
});
var b;
var a;