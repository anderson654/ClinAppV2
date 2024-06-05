@extends('layouts.layout') 


    <br><br><br><br><br>

<form action="/agendamento/date" method="post" action="csrf_field()">
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
									
										<label class="btn btn-outline-primary active">
											<input  type='radio' name='typeService' value="2" id="apartment" checked onfocus="calcular()">
											  <H5>Faxina Residêncial Express</H5>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='typeService' value="1" id="house" onfocus="calcular()">
										  <H5>Faxina Residêncial Comum</H5>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='typeService' value="3"  id="triplex" onfocus="calcular()">
										   <H5>Faxina Residêncial Alto Brilho</H5>
										</label>
									</div>
								</div>
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
											<input  type='radio' name='typeHouse' value="1" id="apartment" checked onfocus="calcular()">
											 <H4> Apartamento </H4>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='typeHouse' value="2" id="house" onfocus="calcular()">
										 <H4> Casa / Sobrado </H4>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='typeHouse' value="3"  id="triplex" onfocus="calcular()">
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
							
					
							
							 
						<p><h5 style="color:#e6b21f;text-align:center;">Escolha os itens adicionais</h5></p>					
																				
							<div class="button-group align-items-center">
								<div class="row justify-content-center">	
								
								
									<div class="row justify-content-center">								
								
										<div class="col-sm-1">
										</div>
							
									  <div class="input-group col-sm-2 tooltip-new justify-content-center">									  							   
										<span class="tooltip-bottom" data-tooltip="">LIMPEZA DE CALÇADA ATÉ 25m² - NÃO FORNECEMOS VAP</span>
										
										<label class="input-button">
										  <input type="checkbox" name="itenAdicional1" value="1" id="itenAdicional1" onclick="calcular();">
										 <span class="button text-center"><H5>CALÇADA</H6>
										</label>									
									   </div>
									   
									   <div class="input-group col-sm-6 tooltip-new justify-content-center">								   
											<span class="tooltip-bottom" data-tooltip="">LIMPEZA DE INTERIOR DE GELADEIRA </span>
											
											<label class="input-button" >
												  <input  type="checkbox" name="itenAdicional5" value="5" id="itenAdicional5" onclick="calcular();">
										<span class="button text-center"><H5>INTERIOR DE GELADEIRA</H5></span>
											</label>
										</div>
									   
										<div class="input-group col-sm-3 tooltip-new justify-content-center">
											<span class="tooltip-bottom" data-tooltip="">LIMPEZA DE BANHEIRA DE HIDRO </span>
											<label class="input-button">
											  <input  type="checkbox" name="itenAdicional3" value="3"  id="itenAdicional3" onclick="calcular();">
											 <span class="button text-center"> <H5>BANHEIRA</H5></span>
											</label>
										</div>
									</div>
								
									<div class="row justify-content-center">	
									
										<div class="input-group col-sm-4 tooltip-new justify-content-center">	
											<span class="tooltip-bottom" data-tooltip="">ÁREA CHURRASQUEIRA - ATÉ 20M² </span>
										
											<label class="input-button">
											  <input type="checkbox" name="itenAdicional2" value="2"  id="itenAdicional2" onclick="calcular();">
											 <span class="button text-center"><H5>ÁREA DE CHURRASQUEIRA</H5></span>
											</label>
										</div>																
								
										<div class="input-group col-sm-6  tooltip-new justify-content-center">
											 <span class="tooltip-bottom" data-tooltip="">ÁREA ENVIDRAÇADA GRANDE - ATÉ 25M² </span>

											<label class="input-button">
											  <input  type="checkbox" name="itenAdicional4" value="4"  id="itenAdicional4" onclick="calcular();">
											  <span class="button text-center"><H5>ÁREA ENVIDRAÇADA GRANDE </H5></span>
											</label>
										</div>
									</div>	
								</div>	
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
								<input type="radio" autocomplete="off" name='service_categories' value="1"  id="avulsa" onfocus="calcular()"> 
								<H4>Faxina Avulsa </H4>
							  </label>
							  
							   <label class="btn btn-outline-primary">
								<input type="radio"  autocomplete="off" name='service_categories' value="2"  id="quinzenal" onfocus="calcular()"> 
								<H4>Assinatura Quinzenal </H4>
							</label>
						  
							<label class="btn btn-outline-primary active">
								<input type="radio"  checked autocomplete="off" name='service_categories' value="3"  id="semanal" onfocus="calcular()"> 
								<H4>Assinatura Semanal </H4>
							</label>	
							</div>
						</div>
						
					
					</body>								
				</div>	
					<!-- Button trigger modal -->
					<br>
					<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
					  Escolher a data
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Informe seu endereço de E-mail</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							<div class="form-group">
								<label for="Email">E-mail</label>
								<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Informe seu e-mail para cadastro">
								<small id="emailHelp" class="form-text text-muted">Este será seu e-mail de cadastro para receber informações sobre o seu agendamento </small>
							  </div>
							
						  </div>
						  <div class="modal-footer">
							
							<button type="submit" class="btn btn-primary">Save changes</button>
							
						  </div>
						</div>
					  </div>
					</div>				
				
				
			
			</body>	
		</div>
	</div>
		<div  id="div-esquerda-valores" class="col-sm-3 mobile-hide">

			
			  <p><h4 style="color:#e6b21f;text-align:center;"></p>
				<span id="tipoFaxinaImp">Faxina Residêncial</span></h4></p>
				<p><h5 style="color:#;text-align:center;">
				<input type=hidden id="tipoFaxina" name="tipoFaxina" value=""></input>
				
				
				<span id="iconTypehouse" class="fas fa-building"></span>
				<span id="numQto"></span>
				<span id="numBwc"></span>
				
				</h5></p>

				<p><h4 style="color:#e6b21f;text-align:center;">Tempo Recomendado</h4></p>
				<p><h5 type=hidden style="color:#;text-align:center;">
				<i class="fas fa-hourglass-start"></i>
				
				
				<span id="tempoRecomendadoImp" name="resultadoHoras"></span> HORAS</h5></p>
				<input type=hidden id="tempoRecomendado" name="tempoRecomendado" value=""></input>
				
				
				<p><h5 style="color:#e6b21f;text-align:center;">ATENÇÃO</h5></p>
				<h6 style="color:#;text-align:center;">
				<span id="qtdProfissional"></span></h6>
				
				
				
				<p><strong><h4 style="color:#e6b21f;text-align:center;">Valor de cada faxina</h4></strong></p>
				<p><h6 style="color:#;text-align:center;">
				<span id="impProd"></span></h6></p>
				
				<p><h4 style="color:#;text-align:center;">
				<span id="textoDe"></span><strike><span id="valorSemDescImp"></span>
				</strike><span id="valorSem"></span><span id="textoVirgulaSem"></span></h4></p>
				<input type=hidden id="valorSemDesc" name="valorSemDesc" value=""></input>
				
								
				<p><h4 style="color:#1e4de8;text-align:center;"><strong>
				<span id="textoPor"></span><span id="ValorDescontoImp"></span><span id="textoVirgula"></span></h4><strong></p>
				<input type=hidden id="ValorDesconto" name="ValorDesconto" value=""></input>
				<span id="totalteste">	</h3></strong></span>
				
				<strong><h4 style="color:#e6b21f;text-align:center;">			
				<span style="color:#000000;" id="iconRecorrencia" class="fas fa-history"></span>
				<span id="tipoRecorrenciaImp">	</h4></strong></span>
				<input type=hidden id="tipoRecorrencia" name="tipoRecorrencia" value=""></input>
				
				

		</div>
		
		<div class="mobile fixed-top">
			
		</div>
		
	</div>	
	
</div>

<script>

function testebla(){
	
	calcular();
	
}

function calcular() {
	
	
	var numQuartos =   Number(document.getElementById("QtdQuartos").value);	
	var numQto = document.getElementById("numQto");
	
    var numBanheiros = Number(document.getElementById("QtdBanheiros").value);
	var numBwc = document.getElementById("numBwc");	
	var $iconTypehouse = document.getElementById("iconTypehouse");
	
	
	
	// Aqui começa os impressao para encontrar o Tempo recomendado e chama a função calculo tempo
		
	var tempoRecomendado = document.getElementById("tempoRecomendadoImp");
	var service_categories = document.querySelector('input[name="service_categories"]:checked').value;
	
		
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
	
	if ( service_categories == "1" ) {
		textoDE.textContent = "R$ ";
		textoPOR.textContent = ""; 
		
		valorSem.textContent =  parseFloat(valorTotal).toFixed(0);
		valorComDesconto.textContent = "";
		valorSemDesconto.textContent =  "";
		textoVirgula.textContent = "";	
		textoVirgulaSem.textContent = ",00";
		document.getElementById("valorSemDesc").value = valorSem.textContent;
		
		document.getElementById("valorSem").style.type = "hide";
		
				
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
	
	var typeRecorrenciaImp = document.getElementById("tipoRecorrenciaImp");
	var $iconRec = document.getElementById("iconRecorrencia");
	
	
		if( service_categories == "1"){
			
			tipeRecorrenciaImp = "Uma unica faxina";
			$iconRec.classList.remove('fa-history');
			
		}else if ( service_categories == "2"){
			
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
	var typeServiceChk = document.querySelector('input[name="typeService"]:checked').value;	
	var typeServiceImp = document.getElementById("tipoFaxinaImp");
	  	
	
	if( typeServiceChk == "2" ){
		
		typeService = "Faxina Residencial Express";
		
	}else if (typeServiceChk == "1" ){
		
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
	
	var typeService = document.querySelector('input[name="typeService"]:checked').value;
   	var totalItenAdicional = sumtempoAdicional();
	
	var tempoParcial = sumtTempoParcial();
	
	
	
		if (  typeService == "2"  ) { 
		
			if(tempoParcial <= 8) {// se tipo faxina igual a Express e tempo recomendado menor que 8 é divido por 2 (duas profissionais)
				
				return tempoParcial / 2 ;
			
			}else{// se tipo faxina igual a Express e tempo recomendado maior que 8 é divido por 4 (quatro profissionais)
			
				return tempoParcial / 4 ;
		}
		
		}else if (typeService == "1" ) { // se tipo faxina igual a Comum
		
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
	
	
       
		$(":checkbox").click(sumtempoAdicional);
	
		totalItenAdicional = parseFloat(sumtempoAdicional());
		
	
		
		var tempoParcial = parseFloat(numQuartos + numBanheiros + typeHouse + totalItenAdicional);
	
		return tempoParcial;
	
	
	
	
}

function sumtempoAdicional(){
		var result = $('input:checked');
		var i=0;
		var total = 0;
		
		var totalteste = document.getElementById("totalteste");
		var itenAdicional1 = 0;
		var itenAdicional2 = 0;
		var itenAdicional3 = 0;
		var itenAdicional4 = 0;
		var itenAdicional5 = 0;
		
		 if ( $('#itenAdicional1').is(':checked') ){
			 
			itenAdicional1 =  1
			
		 }else {
			
			 itenAdicional1 =  0
		 }
		
		if ( $('#itenAdicional2').is(':checked') ){
			 
			itenAdicional2 =  3
			
		 }else {
			 
			itenAdicional2 =  0
		 }
		
		if ( $('#itenAdicional3').is(':checked') ){
			 
			itenAdicional3 =  1
			
		 }else {
			 
			 itenAdicional3 =  0
		 }
		
		if ( $('#itenAdicional4').is(':checked') ){
			 
			itenAdicional4 =  2
			
		 }else {
			 			
			 itenAdicional4 =  0
		 }
				 
		if ( $('#itenAdicional5').is(':checked') ){
			 
			itenAdicional5 =  1
			
		 }else {
			 
			 itenAdicional5 =  0
		 }
		
	
		//totalteste.textContent = total - typeHouse - typeService - Service_categories;
		return itenAdicional1 + itenAdicional2 + itenAdicional3 + itenAdicional4 + itenAdicional5;
	
}

function getvalortotal(){
	
	var valorBase = 55; // o valor base para começo dos valores
    var typeService = document.querySelector('input[name="typeService"]:checked').value;
    var valortotal = 0;
	var qtdProfissional = document.getElementById("qtdProfissional");	
	var produtos = getProdutos();
	
	var tempoRecomendado = tempoRec();

	var tempoTotal = sumtTempoParcial();
	
	
	if(typeService == "2" ){
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
	
	var service_categories = document.querySelector('input[name="service_categories"]:checked').value;
	var typeService = document.querySelector('input[name="typeService"]:checked').value;    
	var tempoRecomendado = tempoRec();
	
	var desconto = 1;
	
	if ( service_categories == "3") {
		
			if( tempoRecomendado <= 6 ){
				
				desconto = 0.82;
				
			}else if ( tempoRecomendado <= 9 ) {
				
				desconto = 0.85;
				
			}else if ( tempoRecomendado <= 18 & typeService == "3" ){ 
				
					desconto = 0.85;
				
			}else {
				
				desconto = 0.88;
				
			}
		
	}else if ( service_categories == "2" ) {
		
			if( tempoRecomendado <= 6 ){
				
				desconto = 0.85;
				
			}else if ( tempoRecomendado <= 9 ) {
				
				desconto = 0.88;
				
			}else if ( tempoRecomendado <= 18 & typeService == "3" ){ 
				
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

	
<style type="text/css">

</style>
<style type="text/css">
#div-esquerda-valores{
  position:fixed;
  z-index:999; 
  right:25px; 
  top:118px;
  overflow:hidden;
  border:1px dashed #CCC;
  padding:6px;
  background-color: #F2F2F2;
  border-radius: 60px;
	.form-group {
				margin-bottom: 0;
			}

	
}	


@media only screen and (max-width: 400px) {
    .mobile-hide{ display: none !important; }
    }
    @media only screen and (max-width: 400px) {
    .mobile{ display: inline !important; }
    }
    @media only screen and (min-width: 500px) {
    .desktop-hide{ display: none !important; }
    }



</style>

