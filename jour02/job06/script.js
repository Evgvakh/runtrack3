const button = document.querySelector('button');
const input = document.querySelector('input');
const main = document.querySelector('.main');

button.addEventListener('click', () => {
    if (input.value === 'konami'){
        button.style.display = 'none';
        input.style.display = 'none';
        main.style.display = 'initial';
    } else {
        alert('Wrong password/MdP incorrect');
        input.value = '';
    }
});

input.addEventListener('keydown', (e) => {    
    if (e.key === 'Enter') {
        if (input.value === 'konami'){
        button.style.display = 'none';
        input.style.display = 'none';
        main.style.display = 'initial';
        } else {
        alert('Wrong password/MdP incorrect');
        input.value = '';
        }
    }
});
