<?php

require(ROOT . "model/patientModel.php");
require(ROOT . "model/clientModel.php");
require(ROOT . "model/speciesModel.php");

function index(){
	render("species/index", array(
		'species' => getAllSpecies()
	));
}

function create(){
	//formulier tonen
	render("species/create");
}

function createSave(){

	if (isset($_POST['species'])) {
		createSpecies($_POST['species']);
	}

	header("Location:" . URL . "species/index");
}

function edit($id){
	$specie = getSpecie($id);

    getSpecie($id);
    
    
	if(isset($_POST['submit'])){
        $species = $_POST['species'];
        
        editSpecies($id, $species);
    }

	render("species/edit", array(
            'species' => getSpecie($id)
    ));
}

function editSave(){
    
} 

function delete($id){
	if (isset($id)) {
		deleteSpecies($id);
	}

	header("Location:" . URL . "species/index");
}