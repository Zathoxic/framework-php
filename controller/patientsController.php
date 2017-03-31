<?php

require(ROOT . "model/patientModel.php");
require(ROOT . "model/clientModel.php");
require(ROOT . "model/speciesModel.php");

function index(){
    
    if(isset($_GET['order'])){
        $order = $_GET['order'];
    } else{
        $order = 'name';
    }
    if(isset($_GET['sort'])){
        $sort = $_GET['sort'];
    } else{
        $sort = 'DESC';
    }
    
    $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
    
	render("patients/index", array(
		'patients' => getAllPatients($order, $sort),
        'order' => $order,
        'sort' => $sort
	));
}

function create(){
	//formulier tonen
	render("patients/create", array(
            'patient' => getPatient($id),
            'patients' => getAllPatients(),
            'clients' => getAllClients(),
            'species' => getAllSpecies()
    ));
}

function createSave(){

	if (isset($_POST['name']) && isset($_POST['species']) && isset($_POST['status']) && isset($_POST['owner']) && isset($_POST['gender'])) {
		createPatient($_POST['name'], $_POST['species'], $_POST['status'], $_POST['owner'], $_POST['gender']);
        header("Location:" . URL . "patients/index");
	}else{
        echo "Niet alle velden zijn ingevuld. Probeer het nog eens.";
    }
}

function edit($id){
	$patient = getPatient($id);

    getPatient($id);
    
    
	if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $species = $_POST['species'];
        $status = $_POST['status'];
        $owner = $_POST['owner'];
        $gender = $_POST['gender'];
        
        editPatient($id, $name, $species, $status, $owner, $gender);
    }

	render("patients/edit", array(
            'patient' => getPatient($id),
            'patients' => getAllPatients(),
            'clients' => getAllClients(),
            'species' => getAllSpecies()
    ));
}

function editSave(){
    
} 

function delete($id){
	if (isset($id)) {
		deletePatient($id);
	}

	header("Location:" . URL . "patients/index");
}