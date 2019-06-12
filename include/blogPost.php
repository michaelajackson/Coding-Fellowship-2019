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
function getAllCategoryPost(){
    $result=dbQuery('
        SELECT *
        FROM category
    ')->fetchAll();
        return $result;
}

function getCategoryPost($categoryId){
    $result=dbQuery('
        SELECT *
        FROM category
        WHERE categoryId= :categoryId
    ', array(
        'categoryId'=>$categoryId
    )
    )->fetch();
        return $result;
}


function getAllBlogPosts(){
    $result=dbQuery('
        SELECT *
        FROM blogPosts
    ', array(
    ))->fetchAll();
    return $result;
    
}

function getAllCategories($categoryId){
        $result=dbQuery('
            SELECT *
            FROM blogPosts
            WHERE categoryId= :categoryId
        ',array('categoryId'=>$categoryId)
        )->fetchAll();
        return $result;
}