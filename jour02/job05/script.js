const loader = document.querySelector('.loader');


console.log(window.screen.height);

window.addEventListener("scroll", () => {
    loader.style.width = `${window.pageYOffset / 100 * 3}%`;
    }    
);

console.log(window.pageYOffset);