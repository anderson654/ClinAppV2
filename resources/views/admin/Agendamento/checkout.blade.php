@extends('layouts.layout') 

    <!-- Principal CSS do Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <!-- Consulta cep -->
<script>
$(document).ready(function() {

function limpa_formulário_cep() {
    // Limpa valores do formulário de cep.
    $("#street").val("");
    $("#neighborhood").val("");
    $("#city").val("");
    $("#uf").val("");
    
}

//Quando o campo cep perde o foco.
$("#zip").blur(function() {

    //Nova variável "cep" somente com dígitos.
    var cep = $(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            $("#street").val("...");
            $("#neighborhood").val("...");
            $("#city").val("...");
            $("#uf").val("...");
       
            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
              console.log(dados);

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#street").val(dados.logradouro);
                    $("#neighborhood").val(dados.bairro);
                    $("#city").val(dados.localidade);
                    $("#uf").val(dados.uf);
                  } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
});
});
</script>
<!-- FIM Consulta cep -->


<form action="/agendamento/store" method="post" action="csrf_field()">
						{{ csrf_field() }}					
  <body class="bg-light">
	<hr><hr>
    <div class="container">
      <div class="py-5 text-center">
         <h2>Formulário de checkout</h2>
        <p class="lead">Abaixo temos um exemplo de formulário construído com controles de formulário Bootstrap. Cada campo obrigatório possui um estado de validação que é ativado quando tenta-se enviar o formulário sem completá-lo.</p>
      </div>
	  


      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Confira detalhes do seu pedido</span>
            <span class="badge badge-secondary badge-pill"></span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">
				@if ( $service->service_type_id == 1 )
					
					Faxina Residencial Comum
					
				@elseif ( $service->service_type_id == 2 )
					
					Faxina Residencial Express
					
				@else 
					
					Faxina Residencial Alto Brilho
				@endif
				
				</h6>
                <small class="text-muted">
				
					@if ( $service->products_included == 1)
					
						Com todos os produtos inclusos
					
					@else 
						
						Sem os produtos
						
					@endif
					
					
				</small>
              </div>
              <span class="text-muted">R$ {{$service->value}}<br> Cada Faxina</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Tempo Contratado </h6>
                <small class="text-muted">
				@if ( $service->address_type_id == 1 )
				
					Apartamento de 
				
				@elseif ( $service->address_type_id == 2 )
				
					Casa ou Sobrado de
					
				@else
					
					Triplex de 

				@endif
				
				
				@if ( $service->qt_bedrooms == 1 )
					
					1 Quarto
				
				@else
										
					{{$service->qt_bedrooms}} Quartos e 
					
				@endif
				
				@if ( $service->qt_bathrooms == 1 )
						1 Banheiro
				@else
					{{$service->qt_bathrooms}} Banheiros 
				
				@endif	
				
				</small>
              </div>
              <span class="text-muted">{{$service->total_time}} horas</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">
				
				Data: {{$service->date_time}}
				
				</h6>
                <small class="text-muted">
				
				</small>
				<span class="text-muted">
				Horário de Início: {{$service->start_time}}
				</span>
              </div>
              <span class="text-muted"></span>
            </li>
			
			
			 <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">
				
				@if ( $service->service_category_id == 3 )
				
					Assinatura Semanal
				
				@elseif ( $service->service_category_id == 2 )
				
					Assinatura Quinzenal
					
				@else 
					
					Faxina Avulsa
					
				@endif
				
				</h6>
                <small class="text-muted">
				
				@if ( $service->service_category_id == 3 )
				
					Em média 4 Faxinas Mês - Uma vez por semana
				
				@elseif ( $service->service_category_id == 2 )
				
					Em média 2 Faxinas Mês - A Cada 15 dias 
					
				@else 
					
					Uma Unica Faxina 
					
				@endif
				</small>
              </div>
              <span class="text-muted"></span>
            </li>
			
			
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Código de promoção</h6>
                <small>CODIGOEXEMEPLO</small>
              </div>
              <span class="text-success"> R$ 0,00 </span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span><h3 style="color:#e6b21f;text-align:center;">Valor Total</span></h3>
              <strong>
			 
			 <h3>R$ {{$service->value}}</h3>
			                 <input type=hidden class="form-control" id="service_id" name="service_id" value="{{$service->id}}" required="">
           
			 	  
			  </strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Código promocional">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Resgatar</button>
              </div>
            </div>
          </form>
        </div> 
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Endereço de cobrança</h4>
          
           
              <div class="mb-3">
                <label for="name">Nome Completo</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required="">
    
              </div>
           
            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Obrigatório)</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="fulano@exemplo.com">
            
            </div>
			
			<div class="mb-3">
              <label for="password">Senha <span class="text-muted">(Obrigatório)</span></label>
              <input type="password" class="form-control" id="password" name="password" placeholder="">
             
			</div>
			
			<div class="mb-3">
              <label for="celphone">Numero de Telefone <span class="text-muted">(Obrigatório)</span></label>
              <input type="number" class="form-control" id="celphone" name="celphone" placeholder="41 988754815">
              
            </div>
			
			<div class="mb-3">
              <label for="cpf">CPF</label>
              <input type="number" class="form-control" id="CPF" name="cpf" placeholder="" required>
             
            </div>
              
              <div class="col-md-3 mb-3">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" placeholder="" required="">
             
              </div>
			
		<div class="row">
            <div class="col-md-6 mb-3">
              <label for="street">Endereço</label>
              <input type="text" class="form-control" id="street" name="street" placeholder="Rua dos ... , nº 0" required>
              
            </div>
			<div class="col-md-6 mb-3">
              <label for="number">Número</label>
              <input type="numeber" class="form-control" id="number" name="number" placeholder="0000" required>
            
            </div>
		</div>
			<div class="mb-3">
              <label for="neighborhood">Bairro</label>
              <input type="text" class="form-control" id="neighborhood" name="neighborhood" required>
             
			</div>
			
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="pais">País</label>
                <select class="custom-select d-block w-100" id="pais" required="">
                  <option value="">Escolha...</option>
                  <option>Brasil</option>
                </select>
               
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Estado</label>
                <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Escolha...</option>
                  <option>Paraná</option>
				  <option>Santa Catarina</option>
                </select>
              
              </div>
			  
            </div>
           

            <h4 class="mb-3">Pagamento</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="boleto" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="boleto">Boleto Bancário</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="credito" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="credito">Cartão de débito</label>
              </div>
             
			 
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-nome">Nome no cartão</label>
                <input type="text" class="form-control" id="cc-nome" placeholder="" required="">
                <small class="text-muted">Nome completo, como mostrado no cartão.</small>
                <div class="invalid-feedback">
                  O nome que está no cartão é obrigatório.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-numero">Número do cartão de crédito</label>
                <input type="text" class="form-control" id="cc-numero" placeholder="" required="">
                <div class="invalid-feedback">
                  O número do cartão de crédito é obrigatório.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiracao">Data de expiração</label>
                <input type="text" class="form-control" id="cc-expiracao" placeholder="" required="">
                <div class="invalid-feedback">
                  Data de expiração é obrigatória.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Código de segurança é obrigatório.
                </div>
              </div>
            </div>
            <hr class="mb-4">
			<button class="btn btn-primary btn-lg btn-block" type="submit">Continue o checkout</button>
           
        </div>
      </div>
	
	
    
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2018 Nome da companhia</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidade</a></li>
          <li class="list-inline-item"><a href="#">Termos</a></li>
          <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>
      </footer>
    </div>

    
    <script>

    </script>
  

</body>
</form>   