const loader = document.querySelector('.loader');

window.addEventListener("scroll", () => {
        loader.style.width = `${window.pageYOffset / 100 * 3}%`;
    }    
);

console.log(window.pageYOffset);