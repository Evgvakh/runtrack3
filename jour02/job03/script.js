const p = document.querySelector('#compteur');
const button = document.querySelector('button');

function addone() {
    let counter = p.textContent;
    counter++;
    p.textContent = counter;
}

button.addEventListener('click', () => { addone(); });