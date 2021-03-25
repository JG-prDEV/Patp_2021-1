<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

</head>
<body>
<h4>Cadastro de Rebanhos</h4>
<form id="cad_rebanhos" name="cad_rebanhos" method="post" action="db_rebanhos.php"  data-toggle="validator" role="form" autocomplete="off">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input name="nome" type="text" class="form-control" id="nome"  placeholder="Nome do rebanho" maxlength="45" required>
  </div>
  <div class="form-group">
    <label for="idempresa">Responsavel</label>
    <select name="idempresa" class="form-control" id="idempresa" required>
      <option value="">Selecione...</option>
      <option value="1">Nome 1</option>
      <option value="2">Nome 2</option>
    </select>
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea name="descricao" class="form-control" id="descricao" rows="3"></textarea>
  </div>
  <div class="form-group">
    <div class="checkbox">
      <label>
        <input name="checkbox" type="checkbox" data-error="Você deve marcar este campo!" required> Marque este item.
      </label>
      <div class="help-block with-errors"></div>
    </div>
  </div>

  <div class="form-group">
    <input name="cadastrar" type="submit" id="cadastrar" class="btn btn-primary" value="Enviar">
  </div>
</form>

      

</body>
</html>
