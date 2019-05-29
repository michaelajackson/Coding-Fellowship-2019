<html>
<head>

<?php
include('config/init.php');
echoHeader("Visual Art");

echo '
<h2>Visual Art<h2>';

$blogPosts= getAllBlogPost();


foreach($blogPosts as $blogPost){
    echo "<a href='/view_post.php?blogPostId=".$blogPost['blogPostId']."'>
    ".$blogPost['title']."
</a><br />";
}

?>