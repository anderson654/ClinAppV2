const cep = document.querySelector("#zip");
const cep_pj = document.querySelector("#zip_pj");
const cityPfInput = document.querySelector("#city_pf");
const cityPjInput = document.querySelector("#city_pj");
const statePfInput = document.querySelector("#state_pf");
const statePjInput = document.querySelector("#state_pj");
const neighbourhoodPfInput = document.querySelector("#neighborhood_pf");
const neighbourhoodPjInput = document.querySelector("#neighborhood_pj");
const streetPfInput = document.querySelector("#street_pf");
const streetPjInput = document.querySelector("#street_pj");

const alertDanger = document.querySelector('.alert-danger');

const showDate = (date) => {
  console.log(date);
  validateCep(date);
  const { localidade, city, uf, bairro, logradouro } = date;
  if (localidade != null) {
    cityPfInput.value = localidade;
    cityPjInput.value = localidade;
  } else {
    cityPfInput.value = city;
    cityPjInput.value = city;
  }
  statePfInput.value = uf;
  statePjInput.value = uf;
  neighbourhoodPfInput.value = bairro;
  streetPfInput.value = logradouro;

  streetPjInput.value = logradouro;
  neighbourhoodPjInput.value = bairro;
};

function validateCep(cep){
  const { localidade, city, uf, bairro, logradouro } = cep;
  if(!(!!(city || localidade) && !!uf && !!bairro && !!logradouro)){
    enableInput();
  }else{
    disableInput();
  }
}

function enableInput(){
  cityPfInput.removeAttribute('readonly');
  cityPjInput.removeAttribute('readonly');

  statePfInput.removeAttribute('readonly');
  statePjInput.removeAttribute('readonly');

  neighbourhoodPfInput.removeAttribute('readonly');
  neighbourhoodPjInput.removeAttribute('readonly');

  streetPfInput.removeAttribute('readonly');
  streetPjInput.removeAttribute('readonly');

  alertDanger.setAttribute('style','display: block');
}

function disableInput(){
  cityPfInput.setAttribute('readonly','readonly');
  cityPjInput.setAttribute('readonly','readonly');

  statePfInput.setAttribute('readonly','readonly');
  statePjInput.setAttribute('readonly','readonly');

  neighbourhoodPfInput.setAttribute('readonly','readonly');
  neighbourhoodPjInput.setAttribute('readonly','readonly');

  streetPfInput.setAttribute('readonly','readonly');
  streetPjInput.setAttribute('readonly','readonly');

  alertDanger.setAttribute('style','display: none');
}


function clearInputs() {
  if (streetPfInput.value || streetPjInput.value) {
    cityPfInput.value = "";
    cityPjInput.value = "";
    statePfInput.value = "";
    statePjInput.value = "";
    neighbourhoodPfInput.value = "";
    streetPfInput.value = "";
    streetPjInput.value = "";
    neighbourhoodPjInput.value = "";
  }
}
function loadingInputs() {
  cityPfInput.value = "Carregando...";
  cityPjInput.value = "Carregando...";
  statePfInput.value = "Carregando...";
  statePjInput.value = "Carregando...";
  neighbourhoodPfInput.value = "Carregando...";
  streetPfInput.value = "Carregando...";
  streetPjInput.value = "Carregando...";
  neighbourhoodPjInput.value = "Carregando...";
}

const buscaCep = (cepNumber) => {
  if (cepNumber.length === 8) {
    loadingInputs();
    $.ajax({
      url: `/admin/agendamentoAdmin/apiCEP/${cepNumber}`,
      Accepts: "application/json",
      type: "GET",
      success: function (e) {
        showDate(JSON.parse(e));
      },
    });
  }
};

cep.addEventListener("keyup", clearInputs);

cep.addEventListener("blur", (e) => {
  let procura = cep.value.replace("-", "");
  buscaCep(procura);
});

cep_pj.addEventListener("blur", (e) => {
  let procura = cep_pj.value.replace("-", "");
  buscaCep(procura);
});
