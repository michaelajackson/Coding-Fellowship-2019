<?php
include('config/init.php');

$blogPosts = getFeaturedPosts();
 
echoHeader('Courtyard Collective');

?>
<div class='bordertop'></div>
 <h2 class='h2feat'>Featured</h2>
 <div class='postCard'>
 <?php
    foreach($blogPosts as $blogPost){
        echo 
        "
        
        <a href='/viewPost.php?blogPostId=".$blogPost['blogPostId']."'>
    
            <img class='feat1' src='/images/posts/".$blogPost['filePath']."'>
            <p class='feat1'>".$blogPost['title'].", ".$blogPost['authorName']."</p>
        
        
            </a><br />
        </div>";
    
    }
$errors=array();
global $errors;

if(isset($_REQUEST['newEmail'])){

    $email = ($_POST['email']);

    if(empty($email)){
        array_push($errors,'Must fill out email');
    }
    if(count($errors) == 0){
        getEmail( $_REQUEST['email']);
    }
}

displayErrors();
echoFooter();
?>
</html>
