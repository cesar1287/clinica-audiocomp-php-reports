<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Relatórios</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Relatório</a>
	    	<a class="btn btn-default" href="index_reports.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

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

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>Empresa</th>
		<th width="30%">Funcionário</th>
		<th>CPF</th>
		<th>Tipo de Exame</th>
		<th>Clínico</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($reports) : ?>
<?php foreach ($reports as $report) : ?>
	<tr>
		<td><?php echo $report['company']; ?></td>
		<td><?php echo $report['name']; ?></td>
		<td><?php echo $report['cpf']; ?></td>
		<td><?php echo $report['type_exam']; ?></td>
		<td><?php echo $report['clinical']; ?></td>
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $report['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $report['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-report="<?php echo $report['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>