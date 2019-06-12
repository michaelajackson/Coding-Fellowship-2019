<?php

function getIssue($issueId){
    $result= dbQuery('
        SELECT *
        FROM issue
        WHERE issueId= :issue
    ', array(
        'issueId'=> $issueId
    )
    )->fetch();
        return $result;
}

function getAllIssues(){
    $result= dbQuery('
        SELECT *
        FROM issue
    ', array())->fetchAll();
        return $result;
}