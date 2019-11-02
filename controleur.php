<?php

include './www/classe/actionBDD.class.php';
include './www/classe/connexion.class.php';

$con = new Connexion();
$maCon = $con -> connexionBDD();

if (!empty($_POST)) {
	if ($_POST['ac'] == 1){
		$recherche = new AppBDD($maCon);
		$recherche -> connectivite();
	}
	if($_POST['ac'] == 'tmb01'){
		$id = $_POST['id'];
		$status = new AppBDD($maCon);
		$status -> changeStatus($id);
		
	}
	if($_POST['ac'] == 'tmb02'){
		$id = $_POST['id'];
		$status = new AppBDD($maCon);
		$status -> changeStatus($id);
		
	}
	
	if($_POST['ac'] == 'tmb03'){
		$id = $_POST['id'];
		$status = new AppBDD($maCon);
		$status -> changeStatus($id);
		
	}
	if($_POST['ac'] == 'tmb04'){
		$id = $_POST['id'];
		$status = new AppBDD($maCon);
		$status -> changeStatus($id);
		
	}
	if($_POST['ac'] == 'tmb05'){
		$id = $_POST['id'];
		$status = new AppBDD($maCon);
		$status -> changeStatus($id);
		
	}
	if($_POST['ac'] == 'tmb06'){
		$id = $_POST['id'];
		$status = new AppBDD($maCon);
		$status -> changeStatus($id);
		
	}
	if($_POST['ac'] == 'rwb1'){
		$id = $_POST['id'];
		$status = new AppBDD($maCon);
		$status -> changeStatus($id);
		
	}
	if($_POST['ac'] == 'eqt01'){
		$id = $_POST['id'];
		$status = new AppBDD($maCon);
		$status -> changeStatus($id);
		
	}
}

