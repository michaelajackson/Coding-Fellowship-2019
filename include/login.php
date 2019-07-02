<?php
function attemptLogin($username, $password){
    $result=dbQuery('
        SELECT *
        FROM users
        WHERE username = :username
        AND password = :password',
        array ('username'=>$username,
               'password'=>$password))->fetch();
        return $result;
}


function isLoggedIn(){
    if (isset($_SESSION['userId'])){
		return true;
    }
    else{
		return false;
	}
}