<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Relatório</h2>

<form action="edit.php?id=<?php echo $report['id']; ?>" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Funcionário</label>
      <input type="text" class="form-control" name="report['name']" value="<?php echo $report['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" name="report['cpf']" value="<?php echo $report['cpf']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data</label>
      <input type="text" class="form-control" name="report['date']" value="<?php echo $report['date']; ?>">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Empresa</label>
      <input type="text" class="form-control" name="report['company']" value="<?php echo $report['company']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Tipo de Exame</label>
      <input type="text" class="form-control" name="report['type_exam']" value="<?php echo $report['type_exam']; ?>">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Clínico</label>
      <input type="text" class="form-control" name="report['clinical']" value="<?php echo $report['clinical']; ?>">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Áudio</label>
      <input type="text" class="form-control" name="report['audio']" value="<?php echo $report['audio']; ?>">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo1">ECG</label>
      <input type="text" class="form-control" name="report['ecg']" value="<?php echo $report['ecg']; ?>">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo2">EEG</label>
      <input type="text" class="form-control" name="report['eeg']" value="<?php echo $report['eeg']; ?>">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Acuidade</label>
      <input type="text" class="form-control" name="report['acuity']" value="<?php echo $report['acuity']; ?>">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Espiro</label>
      <input type="text" class="form-control" name="report['espiro']" value="<?php echo $report['espiro']; ?>">
    </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index_reports.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>