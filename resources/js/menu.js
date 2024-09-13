document.getElementById('hamburguer').addEventListener('click', function () {
  var menu = document.getElementById('menu-mobile');
  var menuIcon = document.getElementById('menu-icon');
  var dropDown = document.getElementById('drop-down');

  if (menu.classList.contains('menu--dropdown')) {
    menu.classList.remove('menu--dropdown');
    menuIcon.src = 'icon/hamburguer 1.svg';
    dropDown.classList.remove('drop-down--open');
  } else {
    menu.classList.add('menu--dropdown');
    menuIcon.src = 'icon/cross.svg';
    dropDown.classList.add('drop-down--open');
  }
});

let isMenuVisible = true;
const threshold = 50;

window.addEventListener('scroll', function () {
  const menu = document.getElementsByClassName('menu-desktop')[0];
  if (window.scrollY > 100 && isMenuVisible) {
    menu.classList.add('menu-hidden');
    isMenuVisible = false;
  } else if (window.scrollY <= 70 && !isMenuVisible) {
    menu.classList.remove('menu-hidden');
    isMenuVisible = true;
  }
});

document.addEventListener('mousemove', function (event) {
  const menu = document.getElementsByClassName('menu-desktop')[0];

  if (event.clientY <= threshold && !isMenuVisible) {
    menu.classList.remove('menu-hidden');
    isMenuVisible = true;
  }
});
