<?php

include('config/init.php');
$comment=getBlogPostComments($_GET['blogPostId']);

$blogPost=getBlogPost($_GET['blogPostId']);
if(isset($_REQUEST['newComment'])){
    createComment(
        $_REQUEST['content'], $_REQUEST['author']
       );
    if(empty($_POST['content'])){
        echo "invalid comment";
    }
}
echoHeader($blogPost['title']);

echo "

<div class='bordertop'></div>
<div class='blogPost'</div>
<h2 class='h2post'>".$blogPost['title']."</h2>
<h5> By ".$blogPost['authorName']."</h5>
<p class='cont'>".$blogPost['content']."</p> 
<img src='/images/Posts/".$blogPost['filePath']."'>
<br>
<br>
<br>
<p class='descrp'>".$blogPost['description']."</p>

";


if(isLoggedIn()){
echoCommentSection();
foreach($comment as $comments)
    echo 
    "<p>".$comments['content']."</p>";
}
else{
    echo " 
    <div class='divbig'> <a href='login_page.php>Login to comment</a> </div>
    ";
}

?>
<div class='divbig'></div>

<?php
echoFooter();
?>