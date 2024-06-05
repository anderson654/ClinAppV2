<div class="form-group">
    <label for="agencia">Agência</label>
    <input type="number" class="form-control" name="agencia" placeholder="Digite a Agência" value="{{$bank_account->agencia}}" required>
</div>
<div class="row">
    <div class="form-group col-md-10">
        <label for="conta">Conta</label>
        <input type="number" class="form-control" name="conta" placeholder="Digite a Conta" value="{{$bank_account->agencia}}" required>
    </div>
    <div class="form-group col-md-2">
        <label for="digito">Dígito</label>
        <input type="number" class="form-control" name="digito" placeholder="Dígito" value="{{$bank_account->agencia}}" required>
    </div>
</div>
<div class="form-group">
    <label for="digito">Banco</label>
    <input type="text" class="form-control" name="banco" placeholder="Digite o Banco" value="{{$bank_account->banco}}" required>
</div>
<div class="form-group">
    <label for="type_account">Tipo de Conta</label>
    <select class="form-control" name="type_account" required>
        <option value="Conta corrente" {{$bank_account->type_account == "Conta corrente" ? 'selected' : '' }}>Conta corrente</option>
        <option value="Conta poupança" {{$bank_account->type_account == "Conta poupança" ? 'selected' : '' }}>Conta poupança</option>
        <option value="Conta salário" {{$bank_account->type_account == "Conta salário" ? 'selected' : '' }}>Conta salário</option>
        <option value="Conta digital" {{$bank_account->type_account == "Conta digital" ? 'selected' : '' }}>Conta digital</option>
        <option value="Conta universitária" {{$bank_account->type_account == "Conta universitária" ? 'selected' : '' }}>Conta universitária</option>
    </select>
</div>

<div class="form-group">
    <input type="hidden" name="user_id" value="{{$id}}">
</div>

<div class="text-right">
    <button type="submit" class="btn btn-primary">Editar</button>
</div>
