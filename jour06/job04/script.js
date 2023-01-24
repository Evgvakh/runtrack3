const burger = document.querySelector(".burger");
const list = document.querySelector("ul");
const spans = document.querySelectorAll('span');

burger.addEventListener("click", () => {
    if(list.style.display != 'flex') {
        list.style.display = "flex";
        spans[0].style.transform = 'rotate(45deg) translateY(7px) translateX(7px)';
        spans[2].style.transform = 'rotate(-45deg) translateY(-6px) translateX(6px)';
        spans[1].style.display = 'none';
        burger.style.backgroundColor = ' #88c1d0';
    } else if (list.style.display == 'flex') {
        list.style.display = "";
        spans[0].style.transform = 'rotate(0) translateY(0) translateX(0)';
        spans[2].style.transform = 'rotate(0) translateY(0) translateX(0)';
        spans[1].style.display = 'block';
    }
});
