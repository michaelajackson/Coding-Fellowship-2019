
<?php

include('config/init.php');
echoHeader('Writing');

$blogPosts = getAllBlogPosts();


echo "
<h2> Fiction</h2>
";

foreach($blogPosts as $blogPost){
    echo "<a href='/viewPost.php?blogPostId=".$blogPost['blogPostId']."'>
        ".$blogPost['title']."
        </a><br />";
}

?>

