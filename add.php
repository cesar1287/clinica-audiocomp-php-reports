<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Relatório</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Funcionário</label>
      <input type="text" class="form-control" name="report['name']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" name="report['cpf']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data</label>
      <input type="text" class="form-control" name="report['date']">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Empresa</label>
      <input type="text" class="form-control" name="report['company']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Tipo de Exame</label>
      <input type="text" class="form-control" name="report['type_exam']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Clínico</label>
      <input type="text" class="form-control" name="report['clinical']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Áudio</label>
      <input type="text" class="form-control" name="report['audio']">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo1">ECG</label>
      <input type="text" class="form-control" name="report['ecg']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo2">EEG</label>
      <input type="text" class="form-control" name="report['eeg']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Acuidade</label>
      <input type="text" class="form-control" name="report['acuity']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Espiro</label>
      <input type="text" class="form-control" name="report['espiro']">
    </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>