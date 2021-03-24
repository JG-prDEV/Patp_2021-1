
<h4>Cadastro de Bovinos</h4>
<form id="cad_bovinos" data-toggle="validator" role="form" autocomplete="off">
  <div class="form-group">
    <label for="nome_bovino">Identificação</label>
    <input type="text" class="form-control" id="nome_bovino" placeholder="Nome do animal" maxlength="45" required>
  </div>
  <div class="form-group">
    <label for="id_rebanho">Identificacao do Rabanho</label>
    <select class="form-control" id="id_rebanho" required>
      <option value=""> </option>
      <option value="">Re01</option>
      <option value="">Re02</option>
    </select>
  </div>
  <div class="form-group">
  <label for="id_raca">Raça pertencente</label>
    <select class="form-control" id="id_raca" required>
      <option value=""> </option>
      <option value="">Ra01</option>
      <option value="">Ra02</option>
    </select>
  </div>
  <div class="form-group">
    <label for="sexo_bovino">Sexo</label>
    <select class="form-control" id="sexo_bovino" required>
      <option value=""> </option>
      <option value="macho">Macho</option>
      <option value="femea">Fêmea</option>
    </select>
  </div>
  <div class="form-group">
    <label for="data_nasc_bovino">Data de Nascimento</label>
    <input type="date" class="form-control" id="data_nasc_bovino" placeholder="00/00/0000" required>
  </div>
  <div class="form-group">
    <label for="peso_nasc_bovino">Peso Nascimento</label>
    <input type="number" class="form-control rg-mask" id="peso_nasc_bovino" maxlength="14" required>
  </div>
  <div class="form-group">
    <label for="data_morte_bovino">Data da Morte</label>
    <input type="date" class="form-control" id="data_morte_bovino" placeholder="00/00/0000" >
  </div>
  <div class="form-group">
    <label for="id_mae_bovino">Bovino Mãe</label>
    <select class="form-control" id="id_mae_bovino" required data-validation-required-message="Por favor, selecione um estado." required >
      <option value=""> </option>
      <option value="">ID06</option>
      <option value="">ID08</option>
    </select>
  </div>
  <div class="form-group">
    <label for="id_pai_bovino">Bovino Pai</label>
    <select class="form-control" id="id_pai_bovino" required>
      <option value=""> </option>
      <option value=""> ID06</option>
      <option value="">ID08</option>
    </select>
  </div>
  <div class="form-group">
    <div class="checkbox">
      <label>
        <input type="checkbox" data-error="Você deve marcar este campo!" required> Marque este item.</label>
      <div class="help-block with-errors"></div>
    </div>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>