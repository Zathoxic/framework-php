<?php

require(ROOT . "model/loginModel.php");

function index(){
    render("login/index");
}


function login($email, $password){
    
}

function profile(){
    render("login/profile");
}