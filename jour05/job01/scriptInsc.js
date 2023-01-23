const submitBtn = document.querySelector('#submit');
const nomInput = document.querySelector('#nom');
const prenomInput = document.querySelector('#prenom');
const emailInput = document.querySelector('#email');
const passInput = document.querySelector('#pass');
const passConfirmInput = document.querySelector('#passconfirm');

const errorWindow = document.querySelector('.error-window');
const prenomerror = document.querySelector('#prenomerror');
const nomerror = document.querySelector('#nomerror');
const emailerror = document.querySelector('#emailerror');
const passerror = document.querySelector('#passerror');

const emails = [];

async function fetchEmails() {
    return fetch('users.json')
            .then (res => res.json())
            .then (res => res);
}

async function getEmails() {
    const result = await fetchEmails();
    for (let i of result) {
        emails.push(i.email);
    }
}

getEmails();


submitBtn.addEventListener('click', (e) => {    

    if(!emailInput.value.includes('@')) {
        e.preventDefault();
        emailerror.textContent = '- Merci de saisir un email dans le format approprie (xxx@ddd.zzz)';
        emailInput.style.outline = '2px solid red';
        errorWindow.style.display = 'block';
    } else {
        emailerror.textContent = '';
        emailInput.style.outline = 'none';
    }

    if (emails.includes(emailInput.value)) {
        e.preventDefault();
        emailerror.textContent = '- Cet email a deja ete enregistre';
        emailInput.style.outline = '2px solid red';
        errorWindow.style.display = 'block';
    }
    
    if (passConfirmInput.value !== passInput.value || passConfirmInput.value == 0 || passInput.value == 0) {
        e.preventDefault();
        passerror.textContent = '- Veuillez verifier la saisie de vos MdP';
        passInput.style.outline = '2px solid red';
        passConfirmInput.style.outline = '2px solid red';
        errorWindow.style.display = 'block';
    } else { 
        passerror.textContent = ''; 
        passConfirmInput.style.outline = 'none';
        passInput.style.outline = 'none';
    }

    if (nomInput.value.length == 0) {
        e.preventDefault();
        nomInput.style.outline = '2px solid red';
        nomerror.textContent = '- Merci de saisir votre nom';
        errorWindow.style.display = 'block';        
    } else { 
        nomerror.textContent = '';
        nomInput.style.outline = 'none';
    }

    if (prenomInput.value.length == 0) {
        e.preventDefault();
        prenomerror.textContent = '- Merci de saisir votre prenom';
        prenomInput.style.outline = '2px solid red';
        errorWindow.style.display = 'block';
    } else {
        prenomerror.textContent = '';
        prenomInput.style.outline = 'none';
    }
});



