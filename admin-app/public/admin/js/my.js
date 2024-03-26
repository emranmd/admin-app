var menu = document.querySelector('.dropdown_menu');
var btn = document.querySelector('.logo_style');
function openMenu() {
    menu.classList.toggle('show');
}
window.addEventListener('click', function (s) {
    if(!btn.contains(s.target)) menu.classList.remove('show');
})
