let slidePage = document.querySelector(".sledepage");
let next = document.getElementById("next");
let comeback = document.getElementById("comback-1");
const baseUrl = window.location.origin + "/api/clin_app";

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function firtNextBtn() {
    let valorCampo = next.value;
    valorFinal = parseInt(valorCampo) + (-100);
    if (valorFinal == -100) {
        comeback.classList.remove("d-none");
    }
    next.setAttribute('value', `${valorFinal}`);
    slidePage.style.marginLeft = `${valorFinal + "%"}`;

    if (valorFinal == -100) {
        let step_1 = document.getElementById("step-1");
        step_1.classList.add("d-none");
        let step_2 = document.getElementById("step-2");
        step_2.classList.remove("d-none");
    }

    if (valorFinal == -200) {
        let step_2 = document.getElementById("step-2");
        step_2.classList.add("d-none");
        let step_3 = document.getElementById("step-3");
        step_3.classList.remove("d-none");
    }
    if (valorFinal == -300) {
        let step_3 = document.getElementById("step-3");
        step_3.classList.add("d-none");
        let step_4 = document.getElementById("step-4");
        step_4.classList.remove("d-none");
    }
    if (valorFinal == -400) {
        let step_4 = document.getElementById("step-4");
        step_4.classList.add("d-none");
        let step_5 = document.getElementById("step-5");
        step_5.classList.remove("d-none");
    }
}


function ComeBack() {
    let valorCampo = next.value;
    valorFinal = parseInt(valorCampo) + (100);
    if (valorFinal > -100) {
        comeback.classList.add("d-none");
    }
    next.setAttribute('value', `${valorFinal}`);
    slidePage.style.marginLeft = `${valorFinal + "%"}`;

    if (valorFinal == 0) {
        let step_1 = document.getElementById("step-1");
        step_1.classList.remove("d-none");
        let step_2 = document.getElementById("step-2");
        step_2.classList.add("d-none");

    }
    if (valorFinal == -100) {
        let step_2 = document.getElementById("step-2");
        step_2.classList.remove("d-none");
        let step_3 = document.getElementById("step-3");
        step_3.classList.add("d-none");
    }
    if (valorFinal == -200) {
        let step_3 = document.getElementById("step-3");
        step_3.classList.remove("d-none");
        let step_4 = document.getElementById("step-4");
        step_4.classList.add("d-none");
    }
    if (valorFinal == -300) {
        let step_4 = document.getElementById("step-4");
        step_4.classList.remove("d-none");
        let step_5 = document.getElementById("step-5");
        step_5.classList.add("d-none");
    }
}

document.querySelector('#name').addEventListener('input', () => {
    const input = document.querySelector('#name');
    const value = input.value;
    if (value !== null && value !== "" && value.length != 0) {
        document.querySelector('#step-1').removeAttribute('disabled')
    } else {
        document.querySelector('#step-1').setAttribute('disabled', 'disabled')
    }
})

document.querySelector('#cpf').addEventListener('input', () => {
    const input = document.querySelector('#cpf');
    const value = input.value;

    if (value.length === 11) {
        fetch(`${baseUrl}/check_cpf/${value}`).then((res) => res.json()).then((res) => {
            if (res.message == "ok") {
                document.querySelector('#blockCpf').setAttribute('hidden', true)
                document.querySelector('#step-2').removeAttribute('disabled')
            } else {
                document.querySelector('#blockCpf').removeAttribute('hidden')
            }
        }).catch((err) => { console.log(err); });
    } else {
        document.querySelector('#step-2').setAttribute('disabled', 'disabled')
    }
})

document.querySelector('#phone').addEventListener('input', () => {
    const input = document.querySelector('#phone');
    const value = input.value;
    if (value.length === 11) {
        document.querySelector('#step-3').removeAttribute('disabled')
    } else {
        document.querySelector('#step-3').setAttribute('disabled', 'disabled')
    }
})

document.querySelector('#email').addEventListener('input', () => {
    const input = document.querySelector('#email');
    const value = input.value;
    if (validateEmail(value)) {
        fetch(`${baseUrl}/check_email/${value}`).then((res) => res.json()).then((res) => {
            if (res.message == "ok") {
                document.querySelector('#blockEmail').setAttribute('hidden', true)
                document.querySelector('#step-4').removeAttribute('disabled')
            } else {
                document.querySelector('#blockEmail').removeAttribute('hidden')
            }
        }).catch((err) => { console.log(err); });
    } else {
        document.querySelector('#step-4').setAttribute('disabled', 'disabled')
    }
})

document.querySelector('#password').addEventListener('input', () => {
    const input = document.querySelector('#password');
    const value = input.value;
    const re = /([A-Za-z])([0-9])/gi

    if (value.length >= 6 && re.test(value)) {
        document.querySelector('#step-5').removeAttribute('disabled')
    } else {
        document.querySelector('#step-5').setAttribute('disabled', 'disabled')
    }
})