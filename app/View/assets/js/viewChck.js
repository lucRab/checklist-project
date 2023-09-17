const idcheck = localStorage.getItem('checklist');
let json;
const response = await fetch('http://localhost/checklist/cl/dctoken', {
  method: 'POST',
  headers: {
    Authorization: 'Bearer' + idcheck,
  },
});
var a;