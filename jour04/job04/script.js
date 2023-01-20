const button = document.querySelector('#showBtn'); 
const main = document.querySelector('.main');

function fetchJson() {
    return fetch("file.json")
        .then ((result) => {return result.json();})
        .then ((res) => res);
}

async function show() {
    const result = await fetchJson();
    
    for (let i in result) {
        const div = document.createElement('div');
        for (let j in result[i]) {
            const p = document.createElement('p');
            p.innerHTML = `<span class="index">${j}: </span> <span>${result[i][j]}</span>`;
            div.append(p);            
        }
        main.append(div);
    }
}
 
button.addEventListener('click', () => {
    main.innerHTML = '';
    show();
});