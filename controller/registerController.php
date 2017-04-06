<?php

require(ROOT . "model/registerModel.php");

function index(){
    render("register/index");
}

function register(){
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $Active = $_POST['Active'];
   
    registerUser($Firstname, $Lastname, $Password, $Email, $Active);
    
    render("login/profile");
}