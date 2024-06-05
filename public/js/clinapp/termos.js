//Add a click event handler onto our checkbox.

document.querySelector('#flexCheckDefault').addEventListener('click', function() {
    if (this.checked === true) {
        document.querySelector('#btnTermsNext').classList.remove('disabled');
    } else {
        document.querySelector('#btnTermsNext').classList.add('disabled');
    }
});