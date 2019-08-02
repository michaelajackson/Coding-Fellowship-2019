<?php

function getIssue($issueId){
    $result= dbQuery('
        SELECT *
        FROM issues
        WHERE issueId = :issueId
    ', array(
        'issueId' => $issueId
    )
    )->fetch();
        return $result;
}

function getAllIssues(){
    $result= dbQuery('
        SELECT *
        FROM issues
    ', array()) -> fetchAll();
        return $result;
}

function getAllIssuePosts($issueId){
    $result= dbQuery('
        SELECT *
        FROM blogPosts
        WHERE issueId= :issueId
    ', array('issueId'=>$issueId))->fetchAll();
        return $result;
}