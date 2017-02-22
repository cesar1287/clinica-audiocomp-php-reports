<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<?php 
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
?>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php unset($_SESSION["message"]); ?>
	<?php unset($_SESSION["type"]); ?>
<?php endif; ?>

<h1>Dashboard</h1>
<hr />

<?php if ($db) : ?>

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Relatório</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="index_reports.php" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-file fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Relatórios</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>