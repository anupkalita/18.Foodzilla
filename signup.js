const form = document.querySelector('#form');
const username = document.querySelector('#username');
const password = document.querySelector('#password');
const phone = document.querySelector('#number');
const address = document.querySelector('#address');

// function to send form data to signup_process.php async
form.addEventListener('submit', function(e){
    console.log(e);
    xhr = new XMLHttpRequest();

    xhr.open('POST', 'signup_process.php', true);

    xhr.onload = function(){
        if(this.status === 200){
            alert(JSON.parse(this.responseText));
        }
    }

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    const formData = `username=${username.value}&password=${password.value}&phone=${phone.value}&address=${address.value}`

    xhr.send(formData);

    // To clear the input fields
    username.value = "";
    password.value = "";
    phone.value = "";
    address.value = "";
    e.preventDefault();
})