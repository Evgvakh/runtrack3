const button = document.querySelector('button');
const body = document.querySelector('body');

button.addEventListener('click', () => {
    showText();
});

function sendRequest() {
    return fetch('expression.txt')
        .then((result) => {return result.text();})
        .then(result=>result);
}

async function showText() {
    const par = document.createElement('p');    
    const text = await sendRequest();    
    par.textContent = text;
    body.append(par);
}