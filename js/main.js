'use strict';

function getResponse(responseText) {
    const obj = JSON.parse(responseText);
    const response = document.querySelector('.response');
    if (obj.success) {
        response.classList.remove('d-none', 'alert-danger');
        response.classList.add('alert-success');
        response.innerHTML = obj.success;
        document.querySelector('.contact-form').reset();
    }
    else if (obj.error) {
        response.classList.remove('d-none', 'alert-success');
        response.classList.add('alert-danger');
        response.innerHTML = obj.error;
    }
}

function sendMail(form) {
    const xhr = new XMLHttpRequest;
    xhr.onreadystatechange = () => {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200 && xhr.responseText) {
            getResponse(xhr.responseText);
        }
    };
    xhr.open('POST', 'api.php');
    xhr.send(new FormData(form)); 
}

document.querySelector('.contact-form').addEventListener('submit', e => {
    e.preventDefault();
    sendMail(e.target);
});