<?php
include_once './controller/StudentsController.php';

if (isset($_POST['id'])) { 
	$student = new StudentsController();
	$student->deleteStudent();
}

