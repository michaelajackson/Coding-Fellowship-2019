<?php

include('config/init.php');


$result=getAllCategories($_GET ['blogPostId']);
$blogPosts= getBlogPost($_GET['blogPostId']);


echoHeader("".$blogPosts['title']);

echo "
<h2>".$blogPosts['title']."</h2>
<p>".$blogPosts['content']."</p> 
";

if(isset($_REQUEST['newComment'])){
    createComment(
        $_REQUEST['content']
    );
}
?>
 
 
 
 <h3>Comments</h3>
<form action='' method='post'>
    Comment:
    <input type='text' name='content'/><br/>
    <input type='submit' name='newComment' value='Post'/>
</form> 