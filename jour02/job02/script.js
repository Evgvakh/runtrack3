const button = document.querySelector('#button');
const div = document.querySelector('div');

function showhide() {
    if (document.querySelector('article') == null) {
        let article = document.createElement('article');
        article.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
        div.append(article);
    } else if (document.querySelector('article') !== null) {
        let article = document.querySelector('article');
        article.remove();
    }
}

button.addEventListener('click', () => { showhide(); });