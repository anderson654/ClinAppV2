<div class="input-field col s12 l12 m12">
  <input type="text" name="nome" id="nome" value="{{ isset($registro->nome) ? $registro->nome : null }}" required="required" autofocus="autofocus">
  <label for="nome">Nome</label>
</div>
<div class="input-field col s12 l12 m12">
	<input type="text" name="localizador" id="localizador" value="{{ isset($registro->localizador) ? $registro->localizador : null }}" required="required">
	<label for="localizador">Localizador</label>
</div>
<div class="input-field col s6 l6 m6">
  <select name="discount_mode" required="required">
    <option value="">-- Selecione</option>
    <option value="porc" {{ isset($registro->discount_mode) && $registro->discount_mode == 'porc' ? ' selected ' : null }}>Porcentagem no valor do produto</option>
    <option value="valor" {{ isset($registro->discount_mode) && $registro->discount_mode == 'valor' ? ' selected ' : null }}>Valor fixo</option>
  </select>
  <label for="discount_mode">Modo de desconto</label>
</div>
<div class="input-field col s6 l6 m6">
  <input type="text" name="discount" id="discount" value="{{ isset($registro->discount) ? $registro->discount : null }}" required="required">
  <label for="discount">Desconto</label>
</div>
<div class="input-field col s6 l6 m6">
  <select name="limit_mode" required="required">
    <option value="">-- Selecione</option>
    <option value="qtd" {{ isset($registro->limit_mode) && $registro->limit_mode == 'qtd' ? ' selected ' : null }}>Quantidade de desconto</option>
    <option value="valor" {{ isset($registro->limit_mode) && $registro->limit_mode == 'valor' ? ' selected ' : null }}>Valor de desconto</option>
  </select>
  <label for="limit_mode">Modo de limite</label>
</div>
<div class="input-field col s6 l6 m6">
  <input type="text" name="limit" id="limit" value="{{ isset($registro->limit) ? $registro->limit : null }}" required="required">
  <label for="limit">Limite desconto</label>
</div>
<div class="input-field col s12 l12 m12">
	<input type="text" class="datepicker" name="dthr_validade" id="dthr_validade" value="{{ isset($registro->dthr_validade) ? $registro->dthr_validade : null }}" required="required">
	<label for="dthr_validade">Data vencimento</label>
</div>
<div class="input-field col s12 l12 m12">
    <div class="row">
        <label for="only_new_customers">Somente para novos clientes?</label>
    </div>
    <div class="row">
      <input name="only_new_customers" type="radio" id="only_new_customers-s" value="S" {{ isset($registro->only_new_customers) && $registro->only_new_customers == 'S' ? ' checked="checked"' : null }} required="required" />
      <label for="only_new_customers-s">Sim</label>
      <input name="only_new_customers" type="radio" id="only_new_customers-n" value="N" {{ isset($registro->only_new_customers) && $registro->only_new_customers == 'N' ? ' checked="checked"' : null }} required="required"  />
      <label for="only_new_customers-n">Não</label>
    </div>
</div>
<div class="input-field col s12 l12 m12">
    <div class="row">
        <label for="active">Ativo</label>
    </div>
    <div class="row">
      <input name="active" type="radio" id="active-s" value="S" {{ isset($registro->active) && $registro->active == 'S' ? ' checked="checked"' : null }} required="required" />
      <label for="active-s">Sim</label>
      <input name="active" type="radio" id="active-n" value="N" {{ isset($registro->active) && $registro->active == 'N' ? ' checked="checked"' : null }} required="required"  />
      <label for="active-n">Não</label>
    </div>
</div>