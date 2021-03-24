<h4>Cadastro de Rebanhos</h4>
<form id="cad_rebanhos" data-toggle="validator" role="form" autocomplete="off">
  <div class="form-group">
    <label for="nome_rebanho">Nome</label>
    <input type="text" class="form-control" id="nome_rebanho" placeholder="Nome do rebanho" maxlength="45" required>
  </div>
  <div class="form-group">
    <label for="responsavel_rebanho">Responsavel</label>
    <select class="form-control" id="responsavel_rebanho" required>
      <option value="">Selecione...</option>
      <option value="">Nome 1</option>
      <option value="">Nome 2</option>
    </select>
  </div>
  <div class="form-group">
    <label for="descricao_rebanho">Descrição</label>
    <textarea class="form-control" id="descricao_rebanho" rows="3"></textarea>
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
