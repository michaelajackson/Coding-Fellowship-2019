<?php

include('config/init.php');

$result=getAllCategoryPost();

$categoryPost=getCategoryPost($_GET['categoryId']);

$blogPost=getAllCategories($_GET['categoryId']);

echoHeader("".$categoryPost['name']);

echo "
<h2>".$categoryPost['name']."</h2>
";

foreach($blogPost as $blogPosts){
    //what page do i want to send this to?
    echo "<a href='/viewPost.php?blogPostId=".$blogPosts['blogPostId']."'>
        ".$blogPosts['title']."
        </a><br />";
}