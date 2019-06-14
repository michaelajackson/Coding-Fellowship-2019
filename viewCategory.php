<?php

include('config/init.php');

$result=getAllCategories();

$categoryPost=getCategoryPost($_GET['categoryId']);

$blogPost=getAllCategoryPost($_GET['categoryId']);

echoHeader($categoryPost['name']);

echo "
<div class='bordertop'></div>
<h2>".$categoryPost['name']."</h2>
";

foreach($blogPost as $blogPosts){
    //what page do i want to send this to?
    echo "<a href='/viewPost.php?blogPostId=".$blogPosts['blogPostId']."'>
       
        <p>".$blogPosts['title']."</p>
       
         <h6> ".$blogPosts['description']."</h6>

    
        </a><br />";
}

echoFooter();