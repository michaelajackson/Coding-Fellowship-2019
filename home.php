
<?php
include('config/init.php');

$blogPosts = getFeaturedPosts();
 
echoHeader('Courtyard Collective');

if(isset($_REQUEST['filePath'])){
    $filePath= ($_POST['filePath']);
    insertImage($filePath);
}
?>
    <form method='post' action=''>
        <input type='file' accept='.png, .jpg, .jpeg' name='filePath'> 
        <input type='submit' name='uploadPic' value='submit'> 
    </form>
<div class='bordertop'></div>
 <h2 class='h2feat'>Featured</h2>
 <?php
    foreach($blogPosts as $blogPost){
        echo 
        "
        <div class='postCard'>
        <a href='/viewPost.php?blogPostId=".$blogPost['blogPostId']."'>
    
            <h2>".$blogPost['title']."</h2>
        
            <p> ".$blogPost['description']."<p>
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
