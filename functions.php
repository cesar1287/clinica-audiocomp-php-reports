<?php

require_once('config.php');
require_once(DBAPI);

$reports = null;
$customer = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $reports;
	$reports = find_all('reports');
}

/**
 *  Cadastro de Clientes
 */
function add() {
  if (!empty($_POST['report'])) {
    
    $report = $_POST['report'];
    
    save('reports', $report);
    header('location: index.php');
  }
}

/**
*  Insere um registro no BD
*/
function save($table = null, $data = null) {
  $database = open_database();
  $columns = null;
  $values = null;
  //print_r($data);
  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }
  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";
  try {
    $database->query($sql);
    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
  
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 
  close_database($database);
}

/**
 *  Atualizacao/Edicao de Cliente
 */
function edit() {
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['report'])) {
      $report = $_POST['report'];
      update('reports', $id, $report);
      header('location: index.php');
    } else {
      global $report;
      $report = find('reports', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $report;
  $report = remove('reports', $id);
  header('location: index.php');
}