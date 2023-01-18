const button = document.querySelector('button');
const article = document.querySelector('#citation');

function citation() {
    console.log(article.textContent);
}

button.addEventListener('click', () => {citation();});