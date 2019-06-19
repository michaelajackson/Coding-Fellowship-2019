<?php

include('config/init.php');

$comment=getAllComments($_GET['blogPostId']);
$result=getAllCategories($_GET ['blogPostId']);
$blogPost=getBlogPost($_GET['blogPostId']);

echoHeader($blogPost['title']);

echo "
<div class='bordertop'></div>
<h2>".$blogPost['title']."</h2>
<h5> By ".$blogPost['authorName']."</h5>
<p>".$blogPost['content']."</p> 
";

if(isset($_REQUEST['newComment'])){
    createComment(
        $_REQUEST['content']
       );
}

echoCommentSection();
foreach($comment as $comments)
    echo "<p>".$comments['content']."</p>";



?>
<div class='divbig'></div>

<?php
echoFooter();
?>