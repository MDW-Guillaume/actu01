let icon = document.getElementById('search-open')
let searchbar = document.getElementById('search-content')

icon.addEventListener('click', function(){
    searchbar.classList.toggle('reveal');
})