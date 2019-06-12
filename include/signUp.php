<?php

function insertUser($username, $password, $name, $email){
   dbQuery(
       'INSERT INTO users (username, password, email, name)
        VALUES(:username, :password, :email, :name)',
    [
        'username'=>$_REQUEST['username'],
        'password'=>$_REQUEST['password'],
        'name'=>$_REQUEST['name'],
        'email'=>$_REQUEST['email'],
    ]

);
}
