const login = document.getElementById('register__login');
const password = document.getElementById('register__password');
const confirm_password = document.getElementById('register__confirm__password');
const error_blok = document.getElementById('reg__error');

window.addEventListener('submit', (event) =>{
    let error_msg = [];
    event.preventDefault();

    if(login.value === '' || login.value == null)
    {
        error_msg.push('Invalid login');
    }

    if(error_msg.length > 0)
    {
        error_blok.innerText = error_msg.join(', ');
    }
});
