<?php

require(ROOT . "model/hospitalModel.php");

function index(){
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

function edit($id)
{
	$patient = getPatient($id);

    getPatient(1);
    
    
	if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $species = $_POST['species'];
        $status = $_POST['status'];
        $owner = $_POST['owner'];
        
        editPatient($id, $name, $species, $status, $owner);
    }

	render("hospital/edit", array(
            'patient' => getPatient($id)
    ));
}

function editSave(){
    
} 

function delete($id)
{
	if (isset($id)) {
		deletePatient($id);
	}

	header("Location:" . URL . "hospital/index");
}