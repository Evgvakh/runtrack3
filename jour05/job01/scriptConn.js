const emailConn = document.querySelector('#emailConn');
const passConn = document.querySelector('#passConn');
const submitConnBtn = document.querySelector('#submitConn');

const errorWindow = document.querySelector('.error-window');
const connError = document.querySelector('#connerror');

const users = [];

function fetchUsers() {
    return fetch('users.json')
            .then (resp => resp.json())
            .then (resp => resp);
}

async function makeArr() {
    const usersList = await fetchUsers();
    for (let i of usersList) {
        users.push([i.email, i.password]);
    }      
}

makeArr();

function verify() {
    let x = true;
    for (let i of users) {
    if (i[0] === emailConn.value && i[1] === passConn.value) {
        x = true;
        break;
    } else { x = false; }    
    }
    return x;
}

submitConnBtn.addEventListener('click', (e) => {
    if (!verify()) {
        e.preventDefault();
        emailConn.style.outline = '2px solid red';
        passConn.style.outline = '2px solid red';
        errorWindow.style.display = 'block';
        connError.textContent = "Votre identifiant et/ou MdP n'es pas correct! Veuillez reessayer.";
    }
}) ;






