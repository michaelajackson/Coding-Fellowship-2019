<?php

function getIssue($issueId){
    $result= dbQuery('
        SELECT *
        FROM issues
        WHERE issueId= :issues
    ', array(
        'issueId'=> $issueId
    )
    )->fetch();
        return $result;
}

function getAllIssues(){
    $result= dbQuery('
        SELECT *
        FROM issues
    ', array())->fetchAll();
        return $result;
}