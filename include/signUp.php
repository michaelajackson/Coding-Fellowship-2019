<?php

function insertUser($username, $password, $name, $email){
   dbQuery(
       'INSERT INTO users (username, password, email, name)
        VALUES(:username, :password, :email, :name)',
    [
        'username'=>$username,
        'password'=>$password,
        'name'=>$name,
        'email'=>$email,
    ]

);
}
