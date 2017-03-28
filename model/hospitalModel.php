<?php

function getPatient($id) 
{

}

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function editPatient() 
{

}

function deletePatient($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
}

function createPatient($name, $species, $status, $owner) 
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(name, species, status, owner) VALUES (:name, :species, :status, :owner)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
        ':owner' => $owner
		));

	$db = null;
}