@extends('layouts.layout') 
@extends('layouts.layout') 


    <hr><hr><hr><hr><hr>

<form action="/products/create-step1" method="post" action="csrf_field()">
						{{ csrf_field() }}
						
<div class="container-fluid">
	<div class="row no-gutters">
		<div class="col-md-9" align="left">
			<div class="col-sm">
		
				<body>		
						<body onload="calcular()"/>
						
						
						<div class="container-fluid">
							
						<div align="center">
							
							<h3 style="color:#e6b21f;text-align:center;"><strong><center>Escolha um Serviço<center></h3></strong></br>
							
							<div class="btn-group-toggle flex-wrap" data-toggle="buttons">
																								 
									<label class="input-button btn btn-outline-primary">
									  <input  class="item" type='radio' name='typeService' value="0" id="express" onfocus="calcular();">
									  <H6>Faxina Residêncial Express</H6>
									</label>									
								  
									<label class="input-button btn btn-outline-primary active">
									  <input class="item" type='radio' name='typeService' value="0" id="comum" checked onfocus="calcular();">
									 <H6>Faxina Residêncial Comum</H6>
									</label>
									
									<label class="input-button btn btn-outline-primary">
									  <input class="item" type='radio' name='typeService' value="0"  id="altoBrilho" onfocus="calcular();">
									  <H6>Faxina Residêncial Alto Brilho</H6>
									</label>
									
							</div> 
						</div>	
							
							
							<div class="container-fluid align-items-center">
							<!-- Botão para acionar modal -->
								<div align="center">
									<br><div type="btn" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#ModalTipoFaxina">
											O que está incluso <i class="far fa-question-circle"></i>
								</div></div>

								<!-- Modal -->
								<div class="modal fade bd-modal-lg" id="ModalTipoFaxina" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
								  <div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="TituloModalCentralizado" align="center">O que está incluso nos serviços</h5>
										
									
										<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body">
											<div class="container">
											
												<div class="row">
													<div class="col-sm">
														<p>
														<h3 style="color:#1e4de8;font-weight:500;text-align:center;margin:0px 0px 0px 0px;line-height:normal;">O que é limpo na Faxina Comum e Express?</h3></p>
														<h4>Cozinha e Área de serviço</h4>
														<ul>
														<li>Armários limpos externamente</li>
														<li>Vidros e Espelhos Janelas&nbsp;(Por questões de segurança são limpas somente por dentro)</li>
														<li>Geladeira (externamente)</li>
														<li>Fogão (externamente)</li>
														<li>Micro-ondas&nbsp;(externamente)</li>
														<li>Retirada dos lixos e troca dos sacos Plásticos</li>
														<li>Limpeza do piso</li>
														</ul>
														<h4>Salas e Quartos</h4>
														<ul>
														<li>Limpeza do Piso</li>
														<li>Vidros e Espelhos Janelas&nbsp;(Por questões de segurança são limpas somente por dentro)</li>
														<li>Moveis, decorações e objetos limpos externamente&nbsp;(Por motivos de segurança não movemos móveis pesados que exijam força, para que sejam limpos por baixo)</li>
														<li>Arrumamos as camas e organizamos o ambiente&nbsp;(As peças para troca da roupa de cama devem estar acessíveis)</li>
														</ul>
														<h4>Banheiros</h4>
														<ul>
														<li>Box lavado</li>
														<li>Sanitário lavado, desinfetado e lacrado com uma etiqueta (Exclusivo)</li>
														<li>Retirada dos lixos e troca dos sacos plásticos</li>
														<li>Armários&nbsp;(externamente)</li>
														<li>Vidros e Espelhos</li>
														<li>Limpeza do piso</li>
														</ul>
														<p>&nbsp;</p>
													</div>
											
														
													<div class="col-sm">
													  <p>
														<h3 style="color:#1e4de8;font-weight:500;text-align:center;margin:0px 0px 0px 0px;line-height:normal;">O que é limpo na Faxina Alto Brilho?</h3></p>
														<p>Na Faxina Alto Brilho, oferecemos todos os itens listados na Faxina Comum, mais os itens abaixo:</p>
														<h4>Cozinha e Área de serviço</h4>
														<ul>
														<li>Interior da Geladeira</li>
														<li>Armários de cozinha e banheiros limpos internamente</li>
														<li>Limpeza azulejos (Em caso de Áreas com muito bolor, verificar a viabilidade antes)</li>
														<li>Fornos Elétricos e microondas internamente</li>
														<li>Piso</li>
														</ul>
														<h4>Banheiros</h4>
														<ul>
														<li>Armários internamente</li>
														<li>Organização de objetos e Armários</li>
														<li>Azulejos (Em caso de Áreas com muito bolor, verificar a viabilidade antes)</li>
														<li>Piso</li>
														</ul>
														<h4>Salas e Quartos</h4>
														<ul>
														<li>Rodapés, portas e batentes</li>
														<li>Piso</li>
														<li>Aspirar os Tapetes (forneça o aspirador)</li>
														</ul>
														<p>&nbsp;</p>
													</div>	
																					
												</div>
											</div>
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
										
									  </div>
									</div>
								  </div>
								</div>
							</div>
					
					
							<div>
								<br><h3 style="color:#1e4de8;font-weight:500;text-align:center;margin:0px 0px 0px 0px;line-height:normal;">NOS CONTE UM POUCO SOBRE O SEU LAR</h3>
																					
								<div align="center">
							
									<p><h4 style="color:#e6b21f;text-align:center;">Você mora em?</h4></p>
						
									<div class="btn-group-toggle flex-wrap" data-toggle="buttons">
									
										<label class="btn btn-outline-primary active">
											<input  type='radio' name='typeHouse' value="1" id="apartment" checked onfocus="calcular();">
											 <H4> Apartamento </H4>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='typeHouse' value="2" id="house" onfocus="calcular();">
										 <H4> Casa / Sobrado </H4>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='typeHouse' value="3"  id="triplex" onfocus="calcular();">
										  <H4> Triplex </H4>
										</label>
									</div>
								</div>
						
							</div>
								
												
							<p></p>
							<div class="container">
								<p><h4 style="color:#e6b21f;text-align:center;">Informe quantos quartos e quantos banheiros possuí sua residência?</h4></p>
							
															
								<div class="row">
									<div class="col-sm">
									  <div class="input-group mb-3 align-items-center justify-content-center">
											<div class="input-group-prepend">
												<label class="input-group-text" for="inputGroupSelect01" >Quartos</label>
											</div>
											  <select class="btn btn-outline-primary" align-items-center justify-content-center name="QtdQuartos" id="QtdQuartos" onclick="calcular()">
												
												<option selected value="1" id="QtdQuartos"> 1 </option>
												<option value="2" id="QtdQuartos"> 2 </option>
												<option value="3" id="QtdQuartos"> 3 </option>
												<option value="4" id="QtdQuartos"> 4 </option>
												<option value="5" id="QtdQuartos"> 5 </option>
												<option value="6" id="QtdQuartos"> 6 </option>
												<option value="7" id="QtdQuartos"> 7 </option>
											  </select>
										</div>
									</div>
									<div class="col-sm">
										<div class="input-group mb-3 align-items-center justify-content-center">
										  <div class="input-group-prepend align-items-center justify-content-center">
											<label class="input-group-text" for="inputGroupSelect02">Banheiros</label>
										  </div>
										  <select class="btn btn-outline-primary align-items-center justify-content-center" name="QtdBanheiros" id="QtdBanheiros" onclick="calcular();">
											
											<option selected value="1" id="QtdBanheiros"> 1 </option>
											<option value="2" id="QtdBanheiros"> 2 </option>
											<option value="3" id="QtdBanheiros"> 3 </option>
											<option value="4" id="QtdBanheiros"> 4 </option>
											<option value="5" id="QtdBanheiros"> 5 </option>
											<option value="6" id="QtdBanheiros"> 6 </option>
											<option value="7" id="QtdBanheiros"> 7 </option>
										  </select>
										</div>
									</div>
								 </div>
							</div>
							
							
						<form class="form-group flex-wrap">
							 
								<p><h5 style="color:#e6b21f;text-align:center;">Escolha os itens adicionais</h5></p>					
								<div id="checkItens" class="row justify-content-center">
									
																
									<label class="input-button btn btn-outline-primary" >
									  <input  type="checkbox" name="itenAdicional" value="1" id="itenAdicional1" onclick="calcular();">
									  <H6>INTERIOR DE GELADEIRA</H6>
									</label>
									
				  
									<label class="input-button btn btn-outline-primary">
									  <input type="checkbox" name="itenAdicional" value="1" id="itenAdicional2" onclick="calcular();">
									 <H6>CALÇADA (ATÉ 25 M²)</H6>
									</label>
									
													
									<label class="input-button btn btn-outline-primary">
									  <input type="checkbox" name="itenAdicional" value="3"  id="itenAdicional3" onclick="calcular();">
									  <H6>ÁREA DE CHURRASQUEIRA</H6>
									</label>
					
									<label class="input-button btn btn-outline-primary">
									  <input  type="checkbox" name="itenAdicional" value="1"  id="itenAdicional4" onclick="calcular();">
									  <H6>BANHEIRA</H6>
									</label>
					
									<label class="input-button btn btn-outline-primary">
									  <input  type="checkbox" name="itenAdicional" value="2"  id="itenAdicional5" onclick="calcular();">
									  <H6>ÁREA ENVIDRAÇADA GRANDE (ATÉ 30m² DE VIDROS)</H6>
									</label>
								</div> 
								
								<div class="container">
								  <div class="row">
									<div class="col-sm justify-content-center">
									
									  <p><h4 style="color:#e6b21f;text-align:center;">Incluir todos os produtos de limpeza?</p></h4>			
										<div class="container-fluid align-items-center">
											<!-- Botão para acionar modal -->
											<div align="center">
											<div type="btn" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#ModalProdutos">
												O que está incluso <i class="far fa-question-circle"></i>
											</div></div>

											<!-- Modal -->
											<div class="modal fade bd-modal-lg" id="ModalProdutos" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="TituloModalCentralizado" align="center">Quais produtos estão inclusos?</h5>
											
										
															<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
													<div class="modal-body">
														<div class="container">
												
															<div class="row">
																<div class="col-sm">
																	<p>
																	<h3 style="color:#1e4de8;font-weight:500;text-align:center;margin:0px 0px 0px 0px;line-height:normal;">Na modalidade com todos os produtos inclusos, nossas profissionais Levam:</h3></p>
																	<h4>Produtos</h4>
																	<ul>																
																	<li>LOC Multiuso Biodegradável</li>
																	<li>LOC Limpa vidros Biodegradável</li>
																	<li>LOC Banheiro Biodegradável</li>
																	<li>LOC Cozinha Biodegradável</li>
																	<li>LOC Dish Drop (Detergente) </li>
																	<li>Produto para finalização do piso com Aroma</li>
																	</ul>
																	<p>&nbsp;</p>
																	<h4>Itens</h4>
																	<ul>
																	<li>Balde</li>
																	<li>Rodo</li>
																	<li>Vassoura</li>
																	<li>Panos Limpos - Diferentes para chão, movéis, Banheiros e Superficies</li>
																	<li>Escovas</li>
																	<li>Lacre sanitários</li>
																	<li>Sacos de lixo (Branco Pequeno)</li>
																	</ul>
																	
																	<h4>Obs. Não fornecemos equipamentos como:</h4>
																	<ul>
																	<li>Aspirador</li>
																	<li>Vap</li>
																	<li>Enceradeira</li>
																	<li>Extensor (Para limpar vidros altos)</li>
																	<li>Para necessidades especiais ou pós obras, consulte valores para locação.</li>
			
																</div>
												
															
														
																						
																</div>
															</div>
														</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
											
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm justify-content-center">
									 <br>
									<div class="onoffswitch">
										<input type="checkbox" name="produtosOnOff" class="onoffswitch-checkbox" id="myonoffswitch" value="0" onclick="calcular()">
										<label class="onoffswitch-label" for="myonoffswitch">
											<span class="onoffswitch-inner"></span>
											<span class="onoffswitch-switch"></span>
										</label>
									</div>
									
								</div>
							</div>
						</div>
					
						<div align="center">
							<br><p><h5 style="color:#e6b21f;text-align:center;">Escolha a frequência da realização da sua Faxina:</h5></p>	
							<div class="btn-group-toggle " data-toggle="buttons" >
						 
							  <label class="btn btn-outline-primary">
								<input type="radio" autocomplete="off" name='typeRecorrencia' value="0"  id="avulsa" onfocus="calcular()"> 
								<H4>Faxina Avulsa </H4>
							  </label>
							  
							   <label class="btn btn-outline-primary">
								<input type="radio"  autocomplete="off" name='typeRecorrencia' value="0"  id="quinzenal" onfocus="calcular()"> 
								<H4>Assinatura Quinzenal </H4>
							</label>
						  
							<label class="btn btn-outline-primary active">
								<input type="radio"  checked autocomplete="off" name='typeRecorrencia' value="0"  id="semanal" onfocus="calcular()"> 
								<H4>Assinatura Semanal </H4>
							</label>	
							</div>
						</div>
						
					
					</body>								
				</div>					
					<div align="center">
					<br>
						<button type="submit" class="btn btn-primary btn-lg btn-block">Escolher a data</button>
					</div>	
				
			
			</body>	
		</div>
	</div>
		<div  id="div-esquerda-valores" class="col-sm-3">

			
			  <p><h3 style="color:#e6b21f;text-align:center;"></p>
				<span id="tipoFaxinaImp">Faxina Residêncial</span></h3></p>
				<p><h5 style="color:#;text-align:center;">
				<input type=hidden id="tipoFaxina" name="tipoFaxina" value=""></input>
				
				
				<span id="iconTypehouse" class="fas fa-building"></span>
				<span id="numQto"></span>
				<span id="numBwc"></span>
				
				</h5></p>

				<p><h3 style="color:#e6b21f;text-align:center;">Tempo Recomendado</h3></p>
				<p><h5 style="color:#;text-align:center;">
				<i class="fas fa-hourglass-start"></i>
				
				
				<span id="tempoRecomendadoImp" name="resultadoHoras"></span> HORAS</h5></p>
				<input type=hidden id="tempoRecomendado" name="tempoRecomendado" value=""></input>
				
				
				<p><h5 style="color:#e6b21f;text-align:center;">ATENÇÃO</h5></p>
				<h6 style="color:#;text-align:center;">
				<span id="qtdProfissional"></span></h6>
				
				
				
				<p><strong><h3 style="color:#e6b21f;text-align:center;">Valor de cada faxina</h3></strong></p>
				<p><h6 style="color:#;text-align:center;">
				<span id="impProd"></span></h6></p>
				
				<p><h4 style="color:#;text-align:center;">
				<span id="textoDe"></span><strike><span id="valorSemDescImp"></span>
				</strike><span id="valorSem"></span><span id="textoVirgulaSem"></span></h4></p>
				<input type=hidden id="valorSemDesc" name="valorSemDesc" value=""></input>
				
								
				<p><h3 style="color:#1e4de8;text-align:center;"><strong>
				<span id="textoPor"></span><span id="ValorDescontoImp"></span><span id="textoVirgula"></span></h3><strong></p>
				<input type=hidden id="ValorDesconto" name="ValorDesconto" value=""></input>
				
				
				<strong><h3 style="color:#e6b21f;text-align:center;">			
				<span style="color:#000000;" id="iconRecorrencia" class="fas fa-history"></span>
				<span id="tipoRecorrenciaImp">	</h3></strong></span>
				<input type=hidden id="tipoRecorrencia" name="tipoRecorrencia" value=""></input>
				
			

		</div>
		
		<div class="mobile fixed-top">
			
		</div>
		
	</div>	
	
</div>

<script>



function calcular() {
	
	
	var numQuartos =   Number(document.getElementById("QtdQuartos").value);	
	var numQto = document.getElementById("numQto");
	
    var numBanheiros = Number(document.getElementById("QtdBanheiros").value);
	var numBwc = document.getElementById("numBwc");	
	var $iconTypehouse = document.getElementById("iconTypehouse");
	
	
	
	// Aqui começa os impressao para encontrar o Tempo recomendado e chama a função calculo tempo
		
	var tempoRecomendado = document.getElementById("tempoRecomendadoImp");
	var typeRecorrencia = document.querySelector('input[name="typeRecorrencia"]:checked').id;
	
		
	tempoRecomendado.textContent = tempoRec();
	document.getElementById("tempoRecomendado").value = tempoRec();
	
	//fim impressao tempo Recomendado
		
	//Imprimir valor do serviço
	
	var valorSemDesconto = document.getElementById("valorSemDescImp");
	var valorComDesconto = document.getElementById("ValorDescontoImp");
	
	
		var valorTotal = getvalortotal();
		var desconto = getDesconto();
		var textoDE = document.getElementById("textoDe");
		var textoPOR = document.getElementById("textoPor");	
		var textoPOR = document.getElementById("textoPor");
		var textoSem = document.getElementById("valorSem");
		var textoVirgula = document.getElementById("textoVirgula");
		var textoVirgulaSem = document.getElementById("textoVirgulaSem");
	
	if ( typeRecorrencia == "avulsa" ) {
		textoDE.textContent = "R$ ";
		textoPOR.textContent = ""; 
		
		valorSem.textContent =  parseFloat(valorTotal).toFixed(0);
		valorComDesconto.textContent = "";
		valorSemDesconto.textContent =  "";
		textoVirgula.textContent = "";	
		textoVirgulaSem.textContent = ",00";
		document.getElementById("valorSemDesc").value = valorSem.textContent;
		
				
	}else {
		
			textoDE.textContent = "DE R$ ";
			textoPOR.textContent = "POR R$ ";	
			
			textoVirgula.textContent = ",00 ";	
			textoVirgulaSem.textContent = "";
			
		valorSem.textContent =  "";
		valorSemDesconto.textContent =  parseFloat(valorTotal).toFixed(0);
		valorComDesconto.textContent = parseFloat(desconto * valorTotal).toFixed(0);
		document.getElementById("ValorDesconto").value = valorComDesconto.textContent;
		
	}
		
		
		
		
	//Inicio imprimir recorrencia 
	
	var typeRecorrencia = document.querySelector('input[name="typeRecorrencia"]:checked').id;	
	var typeRecorrenciaImp = document.getElementById("tipoRecorrenciaImp");
	var $iconRec = document.getElementById("iconRecorrencia");
	
	
		if( typeRecorrencia == "avulsa"){
			
			tipeRecorrenciaImp = "Uma unica faxina";
			$iconRec.classList.remove('fa-history');
			
		}else if ( typeRecorrencia == "quinzenal"){
			
			$iconRec.classList.add('fa-history');
			tipeRecorrenciaImp = "Assinatura Quinzenal ";
			
		}else {
			$iconRec.classList.add('fa-history');
			
			tipeRecorrenciaImp = "Assinatura Semanal ";
					
		}
		
		typeRecorrenciaImp.textContent = tipeRecorrenciaImp;
		document.getElementById("tipoRecorrencia").value = tipeRecorrenciaImp;
			
	// Inicio Imprimir tipo Faxina 
	
	var typeHouse = Number(document.querySelector('input[name="typeHouse"]:checked').value);
	var typeServiceChk = document.querySelector('input[name="typeService"]:checked').id;	
	var typeServiceImp = document.getElementById("tipoFaxinaImp");
	  	
	
	if( typeServiceChk == "express" ){
		
		typeService = "Faxina Residencial Express";
		
	}else if (typeServiceChk == "comum" ){
		
		typeService = "Faxina Residencial Comum";
		
	}else{
		
		typeService = "Faxina Residencial Alto Brilho";
		
	}
	
	if ( typeHouse == 1 ) {//Altera os Icones do tipo faxina 
	  
		$iconTypehouse.classList.add('fa-building');
		$iconTypehouse.classList.remove('fa-home');
	
	} else {
		$iconTypehouse.classList.add('fa-home');
		$iconTypehouse.classList.remove('fa-building');
	}
	
	
	document.getElementById("tipoFaxina").value = typeService;
	typeServiceImp.textContent = typeService;
	
	// Fim imprimir tipo faxina 
	
	if(numQuartos == 1){
		
		numQto.textContent = numQuartos + " Quarto";
		
	}else{
		
		numQto.textContent = numQuartos + " Quartos";
		
	}
	
	if(numBanheiros == 1){
		
		numBwc.textContent = " e " + numBanheiros + " Banheiro";
		
	}else{
		
		numBwc.textContent = " e " + numBanheiros + " Banheiros";
		
	}
	
	
	

}

function tempoRec(){
	
	var typeService = document.querySelector('input[name="typeService"]:checked').id;
   	var totalItenAdicional = sumtempoAdicional();
	
	var tempoParcial = sumtTempoParcial();
	
	
	
		if (  typeService == "express"  ) { 
		
			if(tempoParcial <= 8) {// se tipo faxina igual a Express e tempo recomendado menor que 8 é divido por 2 (duas profissionais)
				
				return tempoParcial / 2 ;
			
			}else{// se tipo faxina igual a Express e tempo recomendado maior que 8 é divido por 4 (quatro profissionais)
			
				return tempoParcial / 4 ;
		}
		
		}else if (typeService == "comum" ) { // se tipo faxina igual a Comum
		
			return  tempoParcial;
	
		}else{ // se tipo faxina igual a Alto Brilho o tempo recomendado é multiplicado por 2 (duas profissionais)
				
			return ((tempoParcial - totalItenAdicional) * 2) + totalItenAdicional; //Tempo Adicional deve somar depois da multiplicação
		}

}

function sumtTempoParcial(){
	
	var numQuartos =   Number(document.getElementById("QtdQuartos").value);
    var numBanheiros = Number(document.getElementById("QtdBanheiros").value);
	var typeHouse = Number(document.querySelector('input[name="typeHouse"]:checked').value);
	var totalItenAdicional = 0;
	var totalItens = 0; //soma dos checkbox
	var tempoParcial = 3;
	
	
       
	
	
		totalItenAdicional = parseFloat(sumtempoAdicional());
		
		$(":checkbox").click(sumtempoAdicional);
		
		var tempoParcial = parseFloat(numQuartos + numBanheiros + typeHouse + totalItenAdicional);
	
		return tempoParcial;
	
	
	
	
}

function sumtempoAdicional(){
		var result = $("input:checked");
		var i=0;
		var total = 0;
		var typeHouse = Number(document.querySelector('input[name="typeHouse"]:checked').value);

		for (i=0;i<result.length;i++){
			
				total = total+parseInt(result[i].value);
			
			}
			
		return total - typeHouse ;
	
}

function getvalortotal(){
	
	var valorBase = 55; // o valor base para começo dos valores
    var typeService = document.querySelector('input[name="typeService"]:checked').id;
    var valortotal = 0;
	var qtdProfissional = document.getElementById("qtdProfissional");	
	var produtos = getProdutos();
	var typeRecorrencia = document.querySelector('input[name="typeRecorrencia"]:checked').id;
	
	var tempoRecomendado = tempoRec();

	var tempoTotal = sumtTempoParcial();
	
	
	if(typeService == "express" ){
		if(tempoTotal <= 8){
			
			qtdProfissional.textContent = "Para a Faxina Express. Lhe atenderemos com 2 (DUAS) profissionais Parceiras";
			valortotal =  parseFloat((((tempoRecomendado * 15) + valorBase) * produtos) * 2);
			
			
		}else if(tempoTotal > 8){
			
			qtdProfissional.textContent = "Para a Faxina Express. Lhe atenderemos com 4 (QUATRO) profissionais Parceiras";
			valortotal =  parseFloat((((tempoRecomendado * 15) + valorBase) * produtos) * 4);
			
		}
	}else if( tempoRecomendado <= 9 ) {// se tempo recomedado até 9 horas  - faxina igual a COMUM ou Alto Brilho o Multiplcador normal
		
			qtdProfissional.textContent = "Lhe atenderemos com 1 (UMA) profissional Parceira";
			valortotal =  parseFloat((((tempoRecomendado * 15) + valorBase) * produtos));
		
	}else if (tempoRecomendado > 9 & tempoRecomendado <= 18 ){// se tempo recomedado maior que 9 e menor que 18 horas - duas profissionais - Divide o tempo por 2 e multiplica o valor por 2
																			    	
		qtdProfissional.textContent = "O tempo recomendado ultrapassa 9 horas. Lhe atenderemos com 2 (DUAS) profissionais Parceiras";
		valortotal =  parseFloat((((((tempoRecomendado / 2) * 15) + valorBase) * produtos)) * 2);
			
	}else if (tempoRecomendado > 18 & tempoRecomendado <= 27){ // se tempo recomedado maior que 18 e menor que 27 horas - 3 profissionais - Divide o tempo por 3 e multiplica o valor por 3
		
		qtdProfissional.textContent = "O tempo recomendado ultrapassa 18 horas. Lhe atenderemos com 3 (TRÊS) profissionais Parceiras";
		valortotal =  parseFloat(((((tempoRecomendado / 3) * 15) + valorBase) * produtos) * 3);
				
	}else if (tempoRecomendado > 27 & tempoRecomendado <= 36){
	
		qtdProfissional.textContent = "O tempo recomendado ultrapassa 27 horas. Lhe atenderemos com 4 (QUATRO) profissionais Parceiras";
		valortotal =  parseFloat(((((tempoRecomendado / 4) * 15) + valorBase) * produtos) * 4);
			
	}else{// Alto Brilho Acima de 36 horas (5 profissionais)
		
		qtdProfissional.textContent = "O tempo recomendado ultrapassa 36 horas. Lhe atenderemos com 5 (CINCO) profissionais Parceiras";
		valortotal =  parseFloat(((((tempoRecomendado / 5) * 15) + valorBase) * produtos) * 5);
		
			
	}
	
	
	valortotal = parseFloat(valortotal);
	return 	valortotal;
	
	
}

function getDesconto(){
	
	var typeRecorrencia = document.querySelector('input[name="typeRecorrencia"]:checked').id;
	var typeService = document.querySelector('input[name="typeService"]:checked').id;    
	var tempoRecomendado = tempoRec();
	
	var desconto = 1;
	
	if ( typeRecorrencia == "semanal") {
		
			if( tempoRecomendado <= 6 ){
				
				desconto = 0.82;
				
			}else if ( tempoRecomendado <= 9 ) {
				
				desconto = 0.85;
				
			}else if ( tempoRecomendado <= 18 & typeService == "altoBrilho" ){ 
				
					desconto = 0.85;
				
			}else {
				
				desconto = 0.88;
				
			}
		
	}else if ( typeRecorrencia == "quinzenal" ) {
		
			if( tempoRecomendado <= 6 ){
				
				desconto = 0.85;
				
			}else if ( tempoRecomendado <= 9 ) {
				
				desconto = 0.88;
				
			}else if ( tempoRecomendado <= 18 & typeService == "altoBrilho" ){ 
				
						desconto = 0.88;
								
			}else {
				
				desconto = 0.9;
				
			}
		
	}else{//avulsa
		
		desconto = 1;
		
	}
	 return desconto;
	
}

function getProdutos() {
	var produtos = 0;
	
	var impProd	 =   document.getElementById("impProd");
	
	
	
    if ( $('#myonoffswitch').is(':checked') ){
		impProd.textContent = "Com todos os produtos inclusos"
		return 1.12;
		
	}else {
		impProd.textContent = " "
		return 1;
	}
	

}

</script>



	</form>
