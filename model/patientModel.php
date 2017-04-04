<?php

function getPatient($id) {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
        ':id' => $id
    ));

	$db = null;

	return $query->fetchAll();

}

function sortAllPatients($order, $sort){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients";

    if(isset($order)&&isset($sort)){
        $sql .= ' ORDER BY ' . $order .  ' ' . $sort;
    }


	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getAllPatients() {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients";


	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function orderPatients(){
    // Create database connection
    $db = openDatabaseConnection();
}



function editPatient($id, $name, $species, $status, $owner, $gender) {
    // Create database connection
    $db = openDatabaseConnection();

    // Get all clients
    $ownerQuery = ("SELECT * FROM clients");
    $query = $db->prepare($ownerQuery);
    $query->execute();



    // Check if all inputs from the form have been entered
    if($name && $species && $status && $owner && $gender){

        // Run a query to check if the patient exists
        $exists = ("SELECT * FROM patients WHERE id=':id'");
        $query = $db->prepare($exists);
        $query->execute(array(
		':id' => $id
		)) or die ("The query could not be completed");

        $count = $query->rowCount();
        if($count != 1){

            // If there IS a patient, update it
            $sql = "UPDATE patients SET name=:newname, species=:newspecies, status=:newstatus, owner=:newowner, gender:newgender WHERE id=:existingid ";
            $query = $db->prepare($sql);
            $query->execute(array(
                ':newname' => $name,
                ':newspecies' => $species,
                ':newstatus' => $status,
                ':newowner' => $owner,
                ':newgender' => $gender,
                ':existingid' => $id
            )) or die("Update could not be applied");
        $db = null;
        echo "<h1 class='Success'>Successfully updated patient</h1>";
        } else echo "<h1 class='Fail'>That patient does not exist! Please try again:</h1>"; // If the patient DOESNT exist, echo: That patient does not exist! Please try again:

    } else echo "<h1 class='Fail'>Whoops! You have not filled in all fields. Please try again:</h1>";
}

function deletePatient($id) {
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
}

function createPatient($name, $species, $status, $owner, $gender) {
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(name, species, status, owner, gender) VALUES (:name, :species, :status, :owner, :gender)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
        ':owner' => $owner,
        ':gender' => $gender
		));

	$db = null;
}
