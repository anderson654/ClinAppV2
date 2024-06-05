function saveLead(){
    const baseUrl = window.location.origin;
    var form = new FormData(document.getElementById('formcomercial'));

    let phone = form.get('phone');
    phone = phone.replace("(","");
    phone = phone.replace(")","");
    phone = phone.replace("-","");
    phone = phone.replace(" ","");
    console.log(phone.length);
    var myHeaders = new Headers();
    myHeaders.append("Accept", "application/json");
    myHeaders.append("Content-Type", "application/json");
    var raw = JSON.stringify({
        "name": `${form.get('name')}`,
        "email": `${form.get('email')}`,
        "phone": `${+phone}`,
        "company": `${form.get('company')}`,
        "office": `${form.get('office')}`,
        "address_type": `${form.get('address_type')}`,
        "approximate_size": `${form.get('approximate_size')}`,
        "service": `${form.get('service')}`
    });
    console.log(raw);
    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };
    fetch(`${baseUrl}/api/v1/agendamento/agendamento-comercial`, requestOptions)
    .then(function (response){
        if(response.ok){
            document.querySelector(".alert-danger").classList.add("d-none");
            document.querySelector(".alert-success").classList.remove("d-none");
            setTimeout(function () {
                window.location.href = window.location.origin + "/";
            }, 3000)
        }
        if (response.status === 422) {
            response.json()
            .then(function(errors){
                document.querySelector(".alert-danger").classList.remove("d-none");
                let errors_list = ``;
                if(errors.name){
                    errors_list += `<li><p>${errors.name[0]}</p></li>`;
                }
                if(errors.phone){
                    errors_list += `<li><p>${errors.phone[0]}</p></li>`;
                }
                if(errors.office){
                    errors_list += `<li><p>${errors.office[0]}</p></li>`;
                }
                if(errors.email){
                    errors_list += `<li><p>${errors.email[0]}</p></li>`;
                }
                if(errors.company){
                    errors_list += `<li><p>${errors.company[0]}</p></li>`;
                }
                document.getElementById("erros_list").innerHTML = errors_list;
            })
        }
    })
    .catch(error => console.log('error', error));
}