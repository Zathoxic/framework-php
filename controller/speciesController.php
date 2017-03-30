<?php

require(ROOT . "model/speciesModel.php");

function index(){
	render("species/index", array(
		'species' => getAllClients()
	));
}

function create()
{
	//formulier tonen
	render("species/create");
}

function createSave()
{

	if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
		createClient($_POST['firstName'], $_POST['prefix'], $_POST['lastName']);
	}

	header("Location:" . URL . "species/index");
}

function edit($id)
{
	$specie = getSpecie($id);

    getSpecie();
    
    
	if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $species = $_POST['species'];
        $status = $_POST['status'];
        $owner = $_POST['owner'];
        
        editSpecie($id, $name, $species, $status, $owner);
    }

	render("species/edit", array(
            'species' => getSpecie($id)
    ));
}

function editSave(){
    
} 

function delete($id)
{
	if (isset($id)) {
		deleteSpecies($id);
	}

	header("Location:" . URL . "species/index");
}