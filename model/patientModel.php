<?php


// This function fetches the patient you want to edit/delete and requires the ID of the patient
function getPatient($id) {
    //Opening database connection and storing it in $db
	$db = openDatabaseConnection();

    //Creating a query
	$sql = "SELECT * FROM patients WHERE id=:id";
	$query = $db->prepare($sql);
    
    //Executing the query
	$query->execute(array(
        ':id' => $id
    ));

    //Closing database connection
	$db = null;

    //Show the results from the query
	return $query->fetchAll();

}

//This function fetches all patients to display on the index page and also makes us able to sort them
function getAllPatients($order, $sort) {
    //Opening database connection and storing it in $db
	$db = openDatabaseConnection();
    
    //Creating a query
	$sql = "SELECT * FROM patients";
    
    //Checking if the requered variables are set for sorting
    if(isset($order)&&isset($sort)){
        $sql .= ' ORDER BY ' . $order .  ' ' . $sort;
    }
    
    
	$query = $db->prepare($sql);
    
    //Executing the query
	$query->execute();

    //Closing database connection
	$db = null;

    //Show the results from the query
	return $query->fetchAll();

}

//This function lets us edit the patient and requires us to enter the name, species, status, owner and gender. The ID comes with the form when we click edit
function editPatient($id, $name, $species, $status, $owner, $gender) {
    // Create database connection
    $db = openDatabaseConnection();
    
    // Get all clients
    $ownerQuery = ("SELECT * FROM clients");
    $query = $db->prepare($ownerQuery);
    
    //Execute the query
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
            $sql = "UPDATE patients SET name = :newname, species = :newspecies, status = :newstatus, owner = :newowner, gender = :newgender WHERE id=:existingid ";
            $query = $db->prepare($sql);
            
            //execute the query
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
        
    } else echo "<h1 class='Fail'>Whoops! You have not filled in all fields. Please try again:</h1>";//If you haven't filled in all fields, the page will return this error
}


//This function deletes the selected patient
function deletePatient($id) {
    //Open databaseconnection and store it in $db
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE id=:id ";
	$query = $db->prepare($sql);
    //Execute query
	$query->execute(array(
		':id' => $id
		));

    //Close database connection
	$db = null;
}

//This function lets us create a patient. It also requires us to enter a name, species, status, owner and gender. Notice how it doesnt need the ID since it automatically gives it in the database
function createPatient($name, $species, $status, $owner, $gender) {
    //Open database connection and save it in $db
	$db = openDatabaseConnection();

    //Create query
	$sql = "INSERT INTO patients(name, species, status, owner, gender) VALUES (:name, :species, :status, :owner, :gender)";
	$query = $db->prepare($sql);
    
    //Execute query
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
        ':owner' => $owner,
        ':gender' => $gender
		));

    //Close database connection
	$db = null;
}