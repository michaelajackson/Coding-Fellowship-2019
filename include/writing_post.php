<?php
function getBlogPost($blogPostId){

$result=dbQuery('
    SELECT *
    FROM blogPosts
    WHERE blogPostId = :blogPostId
', array(
    'blogPostId'=> $blogPostId
)
)->fetch();
    return $result;
}


function getAllBlogPosts(){
    $result=dbQuery('
    SELECT *
    FROM blogPosts
', array())->fetchAll();
    return $result;
}


