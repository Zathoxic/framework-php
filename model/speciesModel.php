<?php

function getSpecie($id) {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
        ':id' => $id
    ));

	$db = null;

	return $query->fetchAll();

}

function getAllSpecies() {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function editSpecies($id, $species) {
    // Check if all inputs from the form have been entered
    if($species){  
	   $db = openDatabaseConnection();
        // Run a query to check if the species exists
        $exists = ("SELECT * FROM species WHERE id=':id'");
        $query = $db->prepare($exists);
        $query->execute(array(
		':id' => $id
		)) or die ("The query could not be completed");
        
        $count = $query->rowCount();
        if($count != 1){
            // If there IS a species, update it
            $sql = "UPDATE species SET species=:newspecies WHERE id=:existingid ";
            $query = $db->prepare($sql);
            $query->execute(array(
                ':newspecies' => $species,
                ':existingid' => $id
            )) or die("Update could not be applied");
        $db = null;
        echo "<h1 class='Success'>Successfully updated species</h1>";
        } else echo "<h1 class='Fail'>Die diersoort bestaat niet! Probeer het opnieuw:</h1>"; // If the species DOESNT exist, echo: That species does not exist! Please try again:
        
    } else echo "<h1 class='Fail'>Whoops! U heeft niet alle velden ingevuld. Probeer het opnieuw:</h1>";
}

function deleteSpecies($id) {
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
}

function createSpecies($species) {
	$db = openDatabaseConnection();

	$sql = "INSERT INTO species (species) VALUES (:species)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':species' => $species
		));

	$db = null;
}