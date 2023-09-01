const token = localStorage.getItem('token');

const response = await fetch('http://localhost/checklist/auth', {
    method: 'POST',
    headers: {
      Authorization: 'Bearer' + token,
    },
});
const json = JSON.stringify(await response.json());
if(!response.ok) {
  alert(json);
  localStorage.removeItem('token');
  window.location.replace('http://localhost/checklist/');
}
  