<?php
function getBlogPost($blogPostId){

$result=dbQuery('
    SELECT *
    FROM blogPost
    WHERE blogPostId = :blogPost
', array(
    'blogPostId'=> $blogPostId
)
)->fetch();
    return $result;
}


function getAllBlogPosts(){
    $result=dbQuery('
    SELECT *
    FROM blogPost
', array())->fetchAll();
    return $result;
}


