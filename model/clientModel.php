<?php

function getClient($id) {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients WHERE id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
        ':id' => $id
    ));

	$db = null;

	return $query->fetchAll();

}

function getAllClients() {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function editClient($id, $firstName, $prefix, $lastName) {
    // Check if all inputs from the form have been entered
    if($firstName && $lastName){  
	   $db = openDatabaseConnection();
        // Run a query to check if the client exists
        $exists = ("SELECT * FROM clients WHERE id=':id'");
        $query = $db->prepare($exists);
        $query->execute(array(
		':id' => $id
		)) or die ("The query could not be completed");
        
        $count = $query->rowCount();
        if($count != 1){
            // If there IS a client, update it
            $sql = "UPDATE clients SET firstName=:newfirstName, prefix=:newprefix, lastName=:newlastName WHERE id=:existingid ";
            $query = $db->prepare($sql);
            $query->execute(array(
                ':newfirstName' => $firstName,
                ':newprefix' => $prefix,
                ':newlastName' => $lastName,
                ':existingid' => $id
            )) or die("Update could not be applied");
        $db = null;
        echo "<h1 class='Success'>Successfully updated client</h1>";
        } else echo "<h1 class='Fail'>Die client bestaat niet! Probeer het opnieuw:</h1>"; // If the client DOESNT exist, echo: That client does not exist! Please try again:
        
    } else echo "<h1 class='Fail'>Whoops! U heeft niet alle velden ingevuld. Probeer het opnieuw:</h1>";
}

function deleteClient($id) {
	$db = openDatabaseConnection();

	$sql = "DELETE FROM clients WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
}

function createClient($firstName, $prefix, $lastName) {
	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients(firstName, prefix, lastName) VALUES (:firstName, :prefix, :lastName)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstName' => $firstName,
		':prefix' => $prefix,
		':lastName' => $lastName
		));

	$db = null;
}