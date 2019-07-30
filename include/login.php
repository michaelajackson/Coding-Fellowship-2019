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

function getUser($userId){
    $result = dbQuery('
        SELECT *
        FROM users
        WHERE userId = :userId
    ', array('userId' => $userId))->fetch();
    return $result;
}

function checkIsAdmin($userId){
    if(isLoggedIn()){
        $result = dbQuery('
            SELECT *
            FROM users
            WHERE admin = 1
        ')->fetch();
    return true;   
    }
    else{
        header('location:login_page.php');
    }
}

function isLoggedIn(){
    if (isset($_SESSION['userId'])){
		return true;
    }
    else{
		return false;
	}
}
