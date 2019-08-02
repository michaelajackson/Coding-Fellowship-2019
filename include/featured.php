<?php

function getFeaturedPosts(){
    $result = dbQuery('
        SELECT *
        FROM blogPosts
        WHERE isFeatured = 1
        AND delete_at is NULL
        ORDER BY datePublished DESC
        
    ')->fetchAll();
    return $result;
}

function addPostToFeaturedList($blogPostId){
    $result = dbQuery('
        UPDATE blogPosts
        SET isFeatured = 1 
        WHERE blogPostId = :blogPostId
    ',array(
        'blogPostId' => $blogPostId
    ))->fetch();
    return $result;

}

function deleteFeaturedPost($blogPostId){
    $result = dbQuery('
        UPDATE blogPosts
        SET delete_at = CURRENT_TIMESTAMP
        WHERE blogPostId = :blogPostId
    ',array('blogPostId' => $blogPostId
    ))->fetch();
    return $result; 
}