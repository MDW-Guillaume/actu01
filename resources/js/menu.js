let hMenu = document.getElementById('hMenu')
let hIcon = document.getElementById('menu_mobile')
let hIconClose = document.getElementById('menu_mobile_close')
let header = document.getElementById('header')
let headerMenu = document.getElementById('headerMenu')

hIcon.addEventListener('click', function(){
    hMenu.classList.toggle('reveal')
    hIcon.classList.toggle('fa-bars')
    hIcon.classList.toggle('fa-close')
})