<?php

include('config/init.php');

$categoryPost=getCategoryPost($_GET['categoryId']);

$blogPost=getAllCategoryPost($_GET['categoryId']);

echoHeader($categoryPost['name']);
?>
<div class='postcard'>
    <?php
echo "
<div class='bordertop'></div>
<h2 class='h2feat'>".$categoryPost['name']."</h2>
";

foreach($blogPost as $blogPosts){
    //what page do i want to send this to?
    echo "<a href='/viewPost.php?blogPostId=".$blogPosts['blogPostId']."'>
       <img class='catimg' src='/images/posts/".$blogPosts['filePath']."'>
        <p class='cat'>".$blogPosts['title']."</p>
         <p class='name'> ".$blogPosts['authorName']."</p>

    
        </a><br />";
}
?>
</div>
<?php
echoFooter();