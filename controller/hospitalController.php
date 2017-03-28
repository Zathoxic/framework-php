<?php

require(ROOT . "model/hospitalModel.php");

function index()
{
	render("hospital/index", array(
		'hospital' => getAllPatients()
	));
}

function create()
{
	//formulier tonen
	render("hospital/create");
}

function createSave()
{

	if (isset($_POST['name']) && isset($_POST['species']) && isset($_POST['status']) && isset($_POST['owner'])) {
		createPatient($_POST['name'], $_POST['species'], $_POST['status'], $_POST['owner']);
	}

	header("Location:" . URL . "hospital/index");
}

function edit()
{
	//$student = getStudent();

	// getStudent(1);

	render("hospital/edit");	
}

function editSave()
{
	
} 

function delete($id)
{
	if (isset($id)) {
		deletePatient($id);
	}

	header("Location:" . URL . "hospital/index.php");
}