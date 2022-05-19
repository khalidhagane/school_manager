<?php
include_once './controller/EmployesController.php';

if (isset($_POST['id'])) { 
	$Teacher = new profsController();
	$Teacher->deleteTechear();
}