import './bootstrap';

let open = document.getElementById('search-open')
let close = document.getElementById('search-close')
let content = document.getElementById('search-content')

open.addEventListener('click', function(){
    content.classList.toggle('reveal')
})

close.addEventListener('click', function(){
    content.classList.remove('reveal')
})