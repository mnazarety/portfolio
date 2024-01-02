let menu = document.querySelector('#menubtn');
let header = document.querySelector('.header');

menu.onclick = () => {
    menu.classList.toggle('=');
    header.classList.toggle('active');
    document.body.classList.toggle('active');
}
window.onscroll = () =>{
    if(window.innerWidth < 991){
        menu.classList.remove('=');
    header.classList.remove('active');
    document.body.classList.remove('active');
    }
}