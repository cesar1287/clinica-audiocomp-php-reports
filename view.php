<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Relatório <?php echo $report['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Empresa:</dt>
	<dd><?php echo $report['company']; ?></dd>

	<dt>Funcionário:</dt>
	<dd><?php echo $report['name']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $report['cpf']; ?></dd>

	<dt>Data:</dt>
	<dd><?php echo $report['date']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Tipo de Exame:</dt>
	<dd><?php echo $report['type_exam']; ?></dd>

	<dt>Clínico:</dt>
	<dd><?php echo $report['clinical']; ?></dd>

	<dt>Áudio:</dt>
	<dd><?php echo $report['audio']; ?></dd>

	<dt>ECG:</dt>
	<dd><?php echo $report['ecg']; ?></dd>

	<dt>EEG:</dt>
	<dd><?php echo $report['eeg']; ?></dd>

	<dt>Acuidade:</dt>
	<dd><?php echo $report['acuity']; ?></dd>

	<dt>Espiro:</dt>
	<dd><?php echo $report['espiro']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $report['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index_reports.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>