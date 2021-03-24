<h4>Cadastro de Clientes</h4>
<form id="cad_clientes" data-toggle="validator" role="form" autocomplete="off">
  <div class="form-group">
    <label for="nome_cliente">Nome</label>
    <input type="text" class="form-control" id="nome_cliente" placeholder="Seu Nome" required >
  </div>
  <div class="form-group">
    <label for="email_cliente">Endereço de email</label>
    <input type="email" class="form-control" id="email_cliente" placeholder="nome@exemplo.com" required>
  </div>
  <div class="form-group">
    <label for="tipo_pessoa">Tipo de Pessoa</label>
    <select class="form-control" id="tipo_pessoa" required> 
      <option value="">Física</option>
      <option value="">Jurídica</option>
    </select>
  </div>
  <div class="form-group">
    <label for="cpf_cliente">CPF</label>
    <input  type="number" class="form-control cpf-mask" id="cpf_cliente" placeholder="Ex.: 00000000000" maxlength="10" >
</script>
  </div>
  <div class="form-group">
    <label for="rg_cliente">RG</label>
    <input type="number" class="form-control rg-mask" id="rg_cliente" placeholder="Ex.: 0000000000" maxlength="10">
  </div>
  <div class="form-group">
    <label for="data_nasc_cliente">Data de Nascimento</label>
    <input type="date" class="form-control" id="data_nasc_cliente" placeholder="00/00/0000" required>
  </div>
  <div class="form-group">
    <label for="cnpj_cliente">CNPJ</label>
    <input type="number" class="form-control rg-mask" id="cnpj_cliente" placeholder="Ex.: 00000000000000" maxlength="14" >
  </div>

  <div class="form-group">
    <label for="ie_cliente">IE</label>
    <input type="number" class="form-control rg-mask" id="ie_cliente" placeholder="Ex.: 000000000" maxlength="9" required>
  </div>
  <div class="form-group">
    <label for="im_cliente">IM</label>
    <input type="number" class="form-control rg-mask" id="im_cliente" placeholder="Ex.: 00000000000" maxlength="11" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCidade">Cidade</label>
      <input type="text" class="form-control" id="inputCidade" maxlength="100" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control" required>
      <option>Selecione...</option>
      <option value="AC">AC</option>
      <option value="AL">AL</option>
      <option value="AP">AP</option>
      <option value="AM">AM</option>
      <option value="BA">BA</option>
      <option value="CE">CE</option>
      <option value="ES">ES</option>
      <option value="DF">DF</option>
      <option value="MA">MA</option>
      <option value="MT">MT</option>
      <option value="MS">MS</option>
      <option value="MG">MG</option>
      <option value="PA">PA</option>
      <option value="PB">PB</option>
      <option value="PR">PR</option>
      <option value="PE">PE</option>
      <option value="PI">PI</option>
      <option value="RJ">RJ</option>
      <option value="RN">RN</option>
      <option value="RS">RS</option>
      <option value="RO">RO</option>
      <option value="RR">RR</option>
      <option value="SC">SC</option>
      <option value="SP">SP</option>
      <option value="SE">SE</option>
      <option value="TO">TO</option>

      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="number" class="form-control" id="inputCEP" maxlength="8" required>
    </div>
  </div>
  <div class="form-group">
    <label for="telefone_cliente">Telefone</label>
    <input type="number" class="form-control rg-mask" id="telefone_cliente" placeholder="Ex.: 00000000000" maxlength="13" required>
  </div>

  <div class="form-group">
    <label for="inputPassword" class="control-label">Senha</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Digite sua Senha..."  
      data-minlength="6" required>
    <span class="help-block">Mínimo de seis (6) digitos</span>
  </div>
  <div class="form-group">
    <div class="checkbox">
      <label>
        <input type="checkbox" data-error="Você deve marcar este campo!" required> Marque este item.
      </label>
      <div class="help-block with-errors"></div>
    </div>
  </div>
  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>