<?php

require(ROOT . "model/clientModel.php");

function index(){
	render("clients/index", array(
		'clients' => getAllClients()
	));
}

function create()
{
	//formulier tonen
	render("clients/create");
}

function createSave()
{

	if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
		createClient($_POST['firstName'], $_POST['prefix'], $_POST['lastName']);
	}

	header("Location:" . URL . "clients/index");
}

function edit($id)
{
	$client = getClients($id);

    getClient();
    
    
	if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $species = $_POST['species'];
        $status = $_POST['status'];
        $owner = $_POST['owner'];
        
        editClient($id, $name, $species, $status, $owner);
    }

	render("clients/edit", array(
            'clients' => getClient($id)
    ));
}

function editSave(){
    
} 

function delete($id)
{
	if (isset($id)) {
		deleteClients($id);
	}

	header("Location:" . URL . "clients/index");
}