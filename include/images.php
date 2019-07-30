<?php
function insertImageBlogPost($blogPostId, $filePath){
    dbQuery('
        UPDATE blogPosts 
        SET filePath = :filePath
        WHERE blogPostId = :blogPostId
    ',
    [
        'blogPostId' => $blogPostId,
        'filePath'=>$filePath
        
    ]);
}
function getBlogImage($blogPostId){
    $result = dbQuery('
        SELECT filePath
        FROM blogPosts
        WHERE blogPostId = :blogPostId
    ', 
    [
        'blogPostId' => $blogPostId
    ]);

}

function insertImageIssue($issueId, $filePath){
    dbQuery('
        UPDATE issues 
        SET filePath = :filePath
        WHERE issueId = :issueId
    ',
    [
        'issueId' => $issueId,
        'filePath'=>$filePath
        
    ]);
}
function getIssueImage($issueId){
    $result = dbQuery('
        SELECT filePath
        FROM issues
        WHERE issueId = :issueId
    ', 
    [
        'issueId' => $issueId
    ]);

}