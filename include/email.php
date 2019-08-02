<?php


function getEmail($email){
    dbQuery('INSERT INTO emailList (email)
        VALUES (:email)
    ',
    [  
    'email'=>$email
    ] 
    );
}
