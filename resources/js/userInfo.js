let emailInput = document.getElementById('user_personnal_info_email_input')
let emailSpan = document.getElementById('user_personnal_info_span_email')
let emailIcon = document.getElementById('update-email')
let nameInput = document.getElementById('user_personnal_info_name_input')
let nameSpan = document.getElementById('user_personnal_info_span_name')
let nameIcon = document.getElementById('update-name')
let btn = document.getElementById('button')
let btnReturn = document.getElementById('btnReturn')


nameIcon.addEventListener('click', function(){
    nameSpan.classList.add('hidden')
    nameInput.classList.add('show')
    btn.classList.add('show')
})

emailIcon.addEventListener('click', function(){
    emailSpan.classList.add('hidden')
    emailInput.classList.add('show')
    btn.classList.add('show')
})

btnReturn.addEventListener('click', function(event){
    event.preventDefault()
    btn.classList.remove('show')

    if(emailSpan.classList.contains("hidden")){
        emailSpan.classList.remove('hidden')
        emailInput.classList.remove('show')
    }

    if(nameSpan.classList.contains("hidden")){
        nameSpan.classList.remove('hidden')
        nameInput.classList.remove('show')
    }
})