<?php

function getUserByCode($code){
  $userList = [
    "haf94hf93h4fuihe89asdl" => 2,
    "0d34ja890fj89sejp9rf8s" => 3
  ];
  return @$userList[$code];
}

function attemptLogin($email, $password){
  //Normally you'd run a database query here, but we're going to hardcode the return value
  //take email and password and return whatever matches the info in the database
  return "3";
}