const baseUrl = window.location.origin + "/api/clin_app/get_price_clean";
const baseUrl1 = window.location.origin + "/api/clin_app/check_email/";
const baseUrl3 = window.location.origin;

const submitBtnCalcula = document.querySelector(".btn-2");
if (submitBtnCalcula) {
  submitBtnCalcula.addEventListener("click", function () {
    calcularValor();
    document.querySelectorAll(".simula-v").forEach((el) =>
      el.addEventListener("click", () => {
        calcularValor();
      })
    );
    removeClass();
  });
}

document.querySelector("#email").addEventListener("keydown", function (event) {
  console.log(event);
  if (event.keyCode === 13) {
    document.querySelector(".btn-login").click();
    event.preventDefault();
  }
});

function calcularValor() {
  var form = new FormData(document.getElementById("valores"));

  if (form.get("cep") != "") {
    var inputTypeProducts;

    if (form.get("Q7") != null) {
      inputTypeProducts = "1";
    } else {
      inputTypeProducts = "0";
    }
    var aditionals = colocarEmArray(form.getAll("teste[]"));

    var raw = JSON.stringify([
      {
        service_category_id: `${form.get("Q5")}`,
        address_type_id: `${form.get("Q2")}`,
        qt_bedrooms: `${form.get("Q3")}`,
        qt_bathrooms: `${form.get("Q4")}`,
        products_included: `${inputTypeProducts}`,
        service_type_id: `${form.get("Q1")}`,
        additionals: `${aditionals}`,
        zip: `${form.get("cep")}`,
        source_request: "site",
        salesman_id: "4",
        totalTime: "0",
        qt_employees: "0",
        region_id: `${form.get("region_id")}`,
      },
    ]);

    consultarValor(raw);
  } else {
    document.querySelector(".alerta").classList.remove("none");
    document.getElementById("error-cep").innerHTML = "Prencha o campo cep";
    setTimeout(function () {
      document.querySelector(".alerta").classList.add("none");
    }, 5000);
  }
}
function consultarValor(url) {
  var myHeaders = new Headers();
  myHeaders.append("Content-Type", "application/json");
  var requestOptions = {
    method: "POST",
    headers: myHeaders,
    body: url,
    redirect: "follow",
  };
  fetch(`${baseUrl}`, requestOptions)
    .then((response) => {
      if (!response.ok)
        throw new Error(
          document.querySelector(".alerta").classList.remove("none"),
          (document.getElementById("error-cep").innerHTML =
            "CEP incorreto ou não atendemos a sua região"),
          setTimeout(function () {
            document.querySelector(".alerta").classList.add("none");
          }, 5000)
        );
      response.json().then(function (price) {
        document.getElementById("price").innerHTML = price.price;
        document.getElementById("price-1").value = price.price;
        document.getElementById("hours").innerHTML = price.totalTime;
        document.getElementById("aj-horas1").innerHTML = price.totalTime;
        document.getElementById("aj-horas").innerHTML = price.totalTime;
        document.getElementById("Q6").value = price.totalTime;
        document.getElementById("hours-2").value = price.totalTime;
        document.getElementById("qt_employees1").innerHTML = price.qt_employees;
        document.getElementById("employes").innerHTML = price.qt_employees;
        document.getElementById("region_id").value = price.region_id;

        if (price.qt_employees > 1) {
          document.getElementById("professionalText").innerHTML =
            "profissionais";
        } else {
          document.getElementById("professionalText").innerHTML =
            "profissional";
        }

        //desbloquear barra
        document.getElementById("price1").style.display = "block";
        document.getElementById("section-2").style.display = "flex";
        document.getElementById("section-3").style.display = "flex";
        document.getElementById("container-btn").style.display = "block";
      });
      return true;
    })
    .catch(function (error) {
      console.error(error);
    });
}

function consultarEmail(email) {
  if (email == "" || email.indexOf("@") == -1 || email.indexOf(".") == -1) {
    document.querySelector("#alerta-email").classList.remove("none"),
      (document.getElementById("error-email").innerHTML =
        "Digite um email válido !"),
      setTimeout(function () {
        document.querySelector("#alerta-email").classList.add("none");
      }, 5000);
  } else {
    fetch(`${baseUrl1 + email}`)
      .then((response) => {
        if (!response.ok) throw new Error("Erro ao executar requisição");
        response.json().then(function (email) {
          if (email.message == "ok") {
            const formRegister = document.querySelector(".form-register");
            formRegister.classList.remove("none");
          } else {
            const formRegister = document.querySelector(".form-autentication");
            window.location.href = window.location.origin + "/login";
          }
          document.getElementById("price").innerHTML = email.message;
        });
      })
      .catch(function (error) {
        console.error(error);
      });
  }
}

function removeClass() {
  var remove2 = document.querySelectorAll(".simula-v");
  remove2.forEach((element) => {
    element.classList.remove("simula-v");
  });
}

function colocarEmArray(array) {
  var additionals = "";
  array.forEach((element) => {
    additionals += "," + element;
  });
  additionals = additionals.substr(1);
  return additionals;
}
function soma(placehouder, value) {
  if (value.value != 9) {
    value.value++;
    placehouder.innerHTML = value.value;
  }
  if (value.value >= document.querySelector("#aj-horas1").innerText) {
    document.querySelector("#error-service").classList.add("none");
  }
}
function subtracao(placehouder, value) {
  if (value.value != 1) {
    value.value--;
    placehouder.innerHTML = value.value;
  }
}
function subtracao1(placehouder, value) {
  if (value.value != 2) {
    value.value--;
    placehouder.innerHTML = value.value;
  }
  if (value.value < document.querySelector("#aj-horas1").innerText) {
    document.querySelector("#error-service").classList.remove("none");
  }
}

function scrollFunction() {
  setTimeout(function () {
    document.getElementById("section-2").scrollIntoView({ behavior: "smooth" });
  }, 1800);
}

const btnSelectToDate = document.querySelector(".btn-3");
btnSelectToDate.addEventListener("click", function () {
  var checkUser = document.querySelector("#user");

  if (checkUser.value == "") {
    const selectToDate = document.querySelector(".autentication");
    selectToDate.classList.remove("none");
  } else {
    saveService();
    window.location.href = window.location.origin + "/login";
  }
});

function unloadScrollBars(tag) {
  if (tag.checked) {
    document.documentElement.style.overflow = "hidden";
    document.body.scroll = "no";
  } else {
    document.documentElement.style.overflow = "auto";
    document.body.scroll = "yes";
  }
}

var nameLastName = false;
var phone = false;
var password = false;

function contarpalavra(value) {
  value.replace(/(\r\n|\n|\r)/g, " ").trim();
  var cont = value.split(/\s+/g).length - 1;
  if (cont == "0") {
    document.querySelector("#alerta-form").classList.remove("none"),
      (document.getElementById("error-form").innerHTML =
        "Digite um nome válido !"),
      setTimeout(function () {
        document.querySelector("#alerta-form").classList.add("none");
      }, 5000);
    nameLastName = false;
  } else {
    nameLastName = true;
  }
}

function verifyPhone(value) {
  phone = value.replace(/[()-\s]/g, "");
  phone = phone.trim();
  if (phone == "" || phone.length != 11) {
    document.querySelector("#alerta-form").classList.remove("none"),
      (document.getElementById("error-form").innerHTML =
        "Verifique seu telefone!"),
      setTimeout(function () {
        document.querySelector("#alerta-form").classList.add("none");
      }, 5000);
    phone = false;
  } else {
    phone = true;
  }
}

function verifyPassword(value, value1) {
  if (value != null && value === value1) {
    if (value.length >= 6) {
      password = true;
    } else {
      document.querySelector("#alerta-form").classList.remove("none"),
        (document.getElementById("error-form").innerHTML =
          "A senha deve possuir mais que 6 caracteres"),
        setTimeout(function () {
          document.querySelector("#alerta-form").classList.add("none");
        }, 5000);
      password = false;
    }
  } else {
    document.querySelector("#alerta-form").classList.remove("none"),
      (document.getElementById("error-form").innerHTML = "Verifique sua senha"),
      setTimeout(function () {
        document.querySelector("#alerta-form").classList.add("none");
      }, 5000);
    password = false;
  }
}

function register() {
  var form1 = new FormData(document.getElementById("valores"));
  var form2 = new FormData(document.getElementById("form-2"));
  var form3 = new FormData(document.getElementById("form-1"));

  if (nameLastName == true && phone == true && password == true) {
    var inputTypeProducts;

    var aditionals = colocarEmArray(form1.getAll("teste[]"));
    if (form1.get("Q7") != null) {
      inputTypeProducts = "1";
    } else {
      inputTypeProducts = "0";
    }

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    var raw = JSON.stringify([
      {
        email: `${form3.get("email")}`,
        name: `${form2.get("name")}`,
        phone: `${form2.get("phone")}`,
        zip: `${form1.get("cep")}`,
        service_category_id: `${form1.get("Q5")}`,
        address_type_id: `${form1.get("Q2")}`,
        qt_bedrooms: `${form1.get("Q3")}`,
        qt_bathrooms: `${form1.get("Q4")}`,
        products_included: `${inputTypeProducts}`,
        additionals: `${aditionals}`,
        service_type_id: `${form1.get("Q1")}`,
        value: document.getElementById("price-1").value,
        qt_employees: document.getElementById("qt_employees1").innerText,
        totalTime: document.getElementById("hours-2").value,
        source: "Facebook",
        password: `${form2.get("password")}`,
        source_request: "SITE",
        salesman_id: 4,
      },
    ]);

    var requestOptions = {
      method: "POST",
      headers: myHeaders,
      body: raw,
      redirect: "follow",
    };

    fetch(`${baseUrl3}/api/clin_app/createCustomer`, requestOptions)
      .then(() => {
        window.location.href = window.location.origin + "/login";
      })
      .then((result) => console.log(result))
      .catch((error) => console.log("error", error));
  } else {
    document.querySelector("#alerta-form").classList.remove("none"),
      (document.getElementById("error-form").innerHTML =
        "Prencha todos os dados de forma correta!"),
      setTimeout(function () {
        document.querySelector("#alerta-form").classList.add("none");
      }, 5000);
  }
}

function calcularValor2() {
  var form = new FormData(document.getElementById("valores"));

  if (form.get("cep") != "") {
    var inputTypeProducts;

    if (form.get("Q7") != null) {
      inputTypeProducts = "1";
    } else {
      inputTypeProducts = "0";
    }

    var aditionals = colocarEmArray(form.getAll("teste[]"));

    var raw = JSON.stringify([
      {
        service_category_id: `${form.get("Q5")}`,
        address_type_id: `${form.get("Q2")}`,
        qt_bedrooms: `${form.get("Q3")}`,
        qt_bathrooms: `${form.get("Q4")}`,
        products_included: `${inputTypeProducts}`,
        service_type_id: `${form.get("Q1")}`,
        additionals: `${aditionals}`,
        zip: `${form.get("cep")}`,
        source_request: "site",
        salesman_id: "4",
        totalTime: document.getElementById("aj-horas").innerText,
        qt_employees: document.getElementById("qt_employees1").innerText,
        region_id: `${form.get("region_id")}`,
      },
    ]);

    consultarValor2(raw);
  } else {
    document.querySelector(".alerta").classList.remove("none");
    document.getElementById("error-cep").innerHTML = "Prencha o campo cep";
    setTimeout(function () {
      document.querySelector(".alerta").classList.add("none");
    }, 5000);
  }
}

function consultarValor2(url) {
  var myHeaders = new Headers();
  myHeaders.append("Content-Type", "application/json");
  var requestOptions = {
    method: "POST",
    headers: myHeaders,
    body: url,
    redirect: "follow",
  };
  fetch(`${baseUrl}`, requestOptions)
    .then((response) => {
      if (!response.ok)
        throw new Error(
          document.querySelector(".alerta").classList.remove("none"),
          (document.getElementById("error-cep").innerHTML =
            "CEP incorreto ou não atendemos a sua região"),
          setTimeout(function () {
            document.querySelector(".alerta").classList.add("none");
          }, 5000)
        );
      response.json().then(function (price) {
        document.getElementById("price").innerHTML = price.price;
        document.getElementById("price-1").value = price.price;
        document.getElementById("hours").innerHTML = price.totalTime;
        document.getElementById("Q6").value = price.totalTime;
        document.getElementById("hours-2").value = price.totalTime;
        document.getElementById("qt_employees1").innerHTML = price.qt_employees;
        document.getElementById("employes").innerHTML = price.qt_employees;
        document.getElementById("region_id").value = price.region_id;

        //desbloquear barra
        document.getElementById("price1").style.display = "block";
        document.getElementById("section-2").style.display = "flex";
        document.getElementById("section-3").style.display = "flex";
        document.getElementById("container-btn").style.display = "block";
      });
      return true;
    })
    .catch(function (error) {
      console.error(error);
    });
}

function register() {
  var form1 = new FormData(document.getElementById("valores"));
  var form2 = new FormData(document.getElementById("form-2"));
  var form3 = new FormData(document.getElementById("form-1"));

  if (nameLastName == true && phone == true && password == true) {
    var inputTypeProducts;

    var aditionals = colocarEmArray(form1.getAll("teste[]"));
    if (form1.get("Q7") != null) {
      inputTypeProducts = "1";
    } else {
      inputTypeProducts = "0";
    }

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    var raw = JSON.stringify([
      {
        email: `${form3.get("email")}`,
        name: `${form2.get("name")}`,
        phone: `${form2.get("phone")}`,
        zip: `${form1.get("cep")}`,
        service_category_id: `${form1.get("Q5")}`,
        address_type_id: `${form1.get("Q2")}`,
        qt_bedrooms: `${form1.get("Q3")}`,
        qt_bathrooms: `${form1.get("Q4")}`,
        products_included: `${inputTypeProducts}`,
        additionals: `${aditionals}`,
        service_type_id: `${form1.get("Q1")}`,
        value: document.getElementById("price-1").value,
        qt_employees: document.getElementById("qt_employees1").innerText,
        totalTime: document.getElementById("hours-2").value,
        source: "Facebook",
        password: `${form2.get("password")}`,
        source_request: "SITE",
        salesman_id: 4,
      },
    ]);

    var requestOptions = {
      method: "POST",
      headers: myHeaders,
      body: raw,
      redirect: "follow",
    };

    fetch(`${baseUrl3}/api/clin_app/createCustomer`, requestOptions)
      .then(() => {
        window.location.href =
          window.location.origin + "/client/agendamento-cliente";
      })
      .then((result) => console.log(result))
      .catch((error) => console.log("error", error));
  } else {
    document.querySelector("#alerta-form").classList.remove("none"),
      (document.getElementById("error-form").innerHTML =
        "Prencha todos os dados de forma correta!"),
      setTimeout(function () {
        document.querySelector("#alerta-form").classList.add("none");
      }, 5000);
  }
}

function saveService() {
  var form1 = new FormData(document.getElementById("valores"));
  var user = document.querySelector("#user_id").value;

  var aditionals = colocarEmArray(form1.getAll("teste[]"));

  var inputTypeProducts;
  if (form1.get("Q7") != null) {
    inputTypeProducts = "1";
  } else {
    inputTypeProducts = "0";
  }

  var myHeaders = new Headers();
  myHeaders.append("Content-Type", "application/json");

  var raw = JSON.stringify({
    service_category_id: `${form1.get("Q5")}`,
    user_id: `${user}`,
    address_type_id: `${form1.get("Q2")}`,
    qt_bedrooms: `${form1.get("Q3")}`,
    qt_bathrooms: `${form1.get("Q4")}`,
    products_included: `${inputTypeProducts}`,
    additionals_ids: `${aditionals}`,
    service_type_id: `${form1.get("Q1")}`,
    value: document.getElementById("price-1").value,
    qt_employees: document.getElementById("qt_employees1").innerText,
    salesman_id: 4,
    totalTime: document.getElementById("hours-2").value,
    zip: `${form1.get("cep")}`
  });

  var requestOptions = {
    method: "POST",
    headers: myHeaders,
    body: raw,
    redirect: "follow",
  };

  fetch(`${baseUrl3}/api/clin_app/createClin/${user}`, requestOptions)
    .then((response) => response.text())
    .then()
    .catch((error) => console.log("error", error));
}
function bedroomsText() {
  if (document.querySelector("#Q3").value > 1) {
    document.querySelector("#bedroomsText").innerText = "quartos";
  } else {
    document.querySelector("#bedroomsText").innerText = "quarto";
  }
}

function bathroomText() {
  if (document.querySelector("#Q4").value > 1) {
    document.querySelector("#bathroomText").innerText = "banheiros";
  } else {
    document.querySelector("#bathroomText").innerText = "banheiro";
  }
}

function modalOpen(modal) {
  modal.classList.remove("none");
}
function modalClose(modal) {
  modal.classList.add("none");
}

async function copyService() {
  var form = new FormData(document.getElementById("valores"));

  var adicionais = [];

  var checkCalcada = document.getElementById("calcada");

  if (checkCalcada.checked) {
    var calcada = "      - Calçada." + "\n";
    adicionais += calcada;
  }
  var checkBanheira = document.getElementById("banheira");

  if (checkBanheira.checked) {
    var banheira = "      - Banheira." + "\n";
    adicionais += banheira;
  }
  var checkGeladeira = document.getElementById("geladeira");

  if (checkGeladeira.checked) {
    var geladeira = "      - Interior de geladeira." + "\n";
    adicionais += geladeira;
  }
  var checkChurrasqueira = document.getElementById("churrasqueira");

  if (checkChurrasqueira.checked) {
    var churrasqueira = "      - Área de churrasqueira." + "\n";
    adicionais += churrasqueira;
  }
  var checkVidro = document.getElementById("vidro");

  if (checkVidro.checked) {
    var vidro = "      - Área envidraçada grande." + "\n";
    adicionais += vidro;
  }

  let tipoFaxina = form.get("Q1");
  tipoFaxina == 1 ? (tipoFaxina = "Faxina Comum") : "";
  tipoFaxina == 2 ? (tipoFaxina = "Faxina Express") : "";
  tipoFaxina == 3 ? (tipoFaxina = "Faxina Alto Brilho") : "";

  let quarto = form.get("Q3");
  let quartoText = document.getElementById("bedroomsText").innerText;

  let banheiro = form.get("Q4");
  let banheiroText = document.getElementById("bathroomText").innerText;

  let ajhoras1 = document.getElementById("aj-horas1").innerText;
  let ajhoras = document.getElementById("aj-horas").innerText;

  let employes = document.getElementById("employes").innerText;
  let professionalText = document.getElementById("professionalText").innerText;

  let valor = document.getElementById("price-1").value;

  let assinatura = form.get("Q5");
  assinatura == 1 ? (assinatura = "Faxina Única") : "";
  assinatura == 2 ? (assinatura = "Assinatura Quinzenal") : "";
  assinatura == 3 ? (assinatura = "Assinatura Semanal") : "";

  let produtos = form.get("Q7");
  produtos != null
    ? (produtos = "✅ Produtos inclusos")
    : (produtos = "❌ Sem Produtos inclusos");

  if (ajhoras === ajhoras1) {
    if (adicionais.length === 0) {
      let text = `💒 ${quarto} ${quartoText} e ${banheiro} ${banheiroText}
⏰ Tempo recomendado de ${ajhoras1} horas
🧹 ${tipoFaxina}
🙋‍♂️ ${employes} ${professionalText}
💰 R$ ${valor},00
📝 ${assinatura}
${produtos}
❌ Sem adicionais! ❌`;

      await navigator.clipboard.writeText(text);
    }

    ///Com adicionais:
    else {
      let text = `💒 ${quarto} ${quartoText} e ${banheiro} ${banheiroText}
⏰ Tempo recomendado de ${ajhoras1} horas
🧹 ${tipoFaxina}
🙋‍♂️ ${employes} ${professionalText}
💰 R$ ${valor},00
📝 ${assinatura}
${produtos}
💥 Adicionais: 
${adicionais}`;

      await navigator.clipboard.writeText(text);
    }
  } else {
    if (adicionais.length === 0) {
      let text = `💒 ${quarto} ${quartoText} e ${banheiro} ${banheiroText}
⏰ Tempo recomendado de ${ajhoras1} horas
⏳  Tempo desejado de ${ajhoras} horas
🧹 ${tipoFaxina}
🙋‍♂️ ${employes} ${professionalText}
💰 R$ ${valor},00
📝 ${assinatura}
${produtos}
❌ Sem adicionais! ❌`;

      await navigator.clipboard.writeText(text);
    } else {
      let text = `💒 ${quarto} ${quartoText} e ${banheiro} ${banheiroText}
⏰ Tempo recomendado de ${ajhoras1} horas
⏳  Tempo desejado de ${ajhoras} horas
🧹 ${tipoFaxina}
🙋‍♂️ ${employes} ${professionalText}
💰 R$ ${valor},00
📝 ${assinatura}
${produtos}
💥 Adicionais: 
${adicionais}`;

      await navigator.clipboard.writeText(text);
    }
  }
}
