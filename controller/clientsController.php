<?php

require(ROOT . "model/patientModel.php");
require(ROOT . "model/clientModel.php");
require(ROOT . "model/speciesModel.php");

function index(){
	render("clients/index", array(
		'clients' => getAllClients()
	));
}

function create(){
	//formulier tonen
	render("clients/create");
}

function createSave(){

	if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
		createClient($_POST['firstName'], $_POST['prefix'], $_POST['lastName']);
	}

	header("Location:" . URL . "clients/index");
}

function edit($id){
	$client = getClient($id);

    getClient($id);
    
    
	if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $prefix = $_POST['prefix'];
        $lastName = $_POST['lastName'];
        
        editClient($id, $firstName, $prefix, $lastName);
    }

	render("clients/edit", array(
            'clients' => getClient($id)
    ));
}

function editSave(){
    
} 

function delete($id){
	if (isset($id)) {
		deleteClient($id);
	}

	header("Location:" . URL . "clients/index");
}