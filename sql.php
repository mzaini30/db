<?php 
include 'base.php';
if (!empty($_POST)){
	// echo "halo";
	header('Content-Type: application/json');
	$hasil = olah($_POST['sql'], $db);
	// var_dump($hasil);
	echo json_encode($hasil);
}
