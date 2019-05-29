<?php

function getBlogPost($blogPostId){
    $allBlogPost= getAllBlogPost();

    return $allBlogPost[$blogPostId];
}

function getAllBlogPost(){

    $allBlogPost= [
    1=>[
        'blogPostId'=>1,
        'title'=>'Keith Haring: The Fight Against AIDS',
        'datePublished'=>'2019-05-29',
        'body'=>'<h2>sdfdsadfa</h2>',
        ],
    2=>[
        'blogPostId'=>2,
        'title'=>'Frida Kahlo: Tearing Down Capitalism',
        'datePublished'=>'2019-05-29',
        'body'=>'<h2>fjkdfjkdfjkd</h2>',
        ],
    ];
    return $allBlogPost;
}
