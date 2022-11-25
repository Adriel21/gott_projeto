const botaoMenu = document.querySelector('.icone'); /*nav h2 a */
const menu = document.querySelector('.menu'); /* nav ul*/

botaoMenu.addEventListener('click', function(event) {
    event.preventDefault(); // Previne o comportamento padrão do navegador
    menu.classList.toggle("menu-aberto");

    if (menu.classList.contains('menu-aberto') ){
        botaoMenu.innerHTML = "&times;"; 
    } else {
        botaoMenu.innerHTML = "&equiv;";
    }
});
