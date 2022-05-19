<?php
include_once './controllers/ParentsController.php';

if (isset($_POST['id'])) { 
	$parent = new ParentsController();
	$parent -> deletParent();
}
