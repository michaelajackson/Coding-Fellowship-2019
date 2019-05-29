<?php

function absolutevalue($rawInput){
    if($rawInput < 0){
        $processedInput= $rawInput * -1;
    }
    else{
        $processedInput=$rawInput;
    }
    return $processedInput;
}

echo absolutevalue(5). "<br/>";
echo abolutevalue(-2). "<br/>";

/*

-common html
-Database CRUD function
-Helper fuction: formate a number as a dollar amount

*/

echo "
<h1>Courtyard Collective</h1>
"; 

function echoHeader(){
    echo "
        <div 
    "
}