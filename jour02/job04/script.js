const textarea = document.querySelector('#keylogger');

document.addEventListener('keydown',  (e) => {
    if (e.target != textarea) {
        textarea.value += e.key;        
    } else if (e.target == textarea) {
        textarea.value += e.key;              
    }
});