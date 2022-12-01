let emailInput = document.getElementById('user_personnal_info_email_input')
let emailSpan = document.getElementById('user_personnal_info_span_email')
let emailIcon = document.getElementById('update-email')
let nameInput = document.getElementById('user_personnal_info_name_input')
let nameSpan = document.getElementById('user_personnal_info_span_name')
let nameIcon = document.getElementById('update-name')
let btn = document.getElementById('button')
let btnReturn = document.getElementById('btnReturn')
let modifyBtn = document.getElementById('modify-text')


nameIcon.addEventListener('click', function(){
    nameSpan.classList.add('hidden')
    nameInput.classList.add('show')
    btn.classList.add('show')
    modifyBtn.classList.add('hidden')
})

emailIcon.addEventListener('click', function(){
    emailSpan.classList.add('hidden')
    emailInput.classList.add('show')
    btn.classList.add('show')
    modifyBtn.classList.add('hidden')
})

btnReturn.addEventListener('click', function(event){
    event.preventDefault()
    btn.classList.remove('show')
    modifyBtn.classList.remove('hidden')

    if(emailSpan.classList.contains("hidden")){
        emailSpan.classList.remove('hidden')
        emailInput.classList.remove('show')
    }

    if(nameSpan.classList.contains("hidden")){
        nameSpan.classList.remove('hidden')
        nameInput.classList.remove('show')
    }
})

modifyBtn.addEventListener('click', function(){
    modifyBtn.classList.add('hidden')
    emailSpan.classList.add('hidden')
    emailInput.classList.add('show')
    nameSpan.classList.add('hidden')
    nameInput.classList.add('show')
    btn.classList.add('show')
})