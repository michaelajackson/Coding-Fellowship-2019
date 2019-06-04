<?php

include('config/init.php');


$result=getAllBlogPosts();
$blogPosts= getBlogPost($_GET['blogPostId']);


echoHeader("".$blogPosts['title'], "".$blogPosts ['description']);

echo "
<h2>".$blogPosts['title']."</h2>
<p>".$blogPosts['content']."</p> 
"
?>