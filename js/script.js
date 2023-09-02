const menuTrigger = document.getElementById('menu-trigger');
const submenu = document.querySelector('.submenu');

menuTrigger.addEventListener('mouseleave', () => {
    submenu.style.display = 'none';
});