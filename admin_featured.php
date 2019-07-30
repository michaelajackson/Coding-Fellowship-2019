<?php
include('config/init.php');


(checkIsAdmin($_SESSION['userId']));

echoHeader('Admin Page');

if(isset($_REQUEST['updateFeatured'])){
    addPostToFeaturedList($_POST['blogPostId']);
    header('location: admin_featured.php');
    exit;
}
if(isset($_REQUEST['deleteFeatured'])){
    deleteFeaturedPost($_REQUEST['blogPostId']);
    header('location: admin_featured.php');
    exit;
}
if(isset($_REQUEST['uploadPic'])){
    $filePath= ($_POST['filePath']);
    $blogPostId =($_POST['blogPostId']);
    insertImageBlogPost($blogPostId, $filePath);
    
}
if(isset($_REQUEST['issuePicUpload'])){
    $filePath= ($_POST['filePath']);
    $issueId= ($_POST['issueId']);
    insertImageIssue($issueId,$filePath);
}

?>
<div class='bordertop'></div>
<div class='signupdiv'>

    <form action= '' method = 'post'>
        <p>Featured Posts</p>
            <input  type='number' name='blogPostId' min='1' placeholder='blogPostId Here'>
            <input  type='submit' name='updateFeatured' value='Update'>
            <input  type='submit' name='deleteFeatured' value='Delete'>
     </form>

     <form method='post' action=''>  
        <p class='inputnames'>Add image to Post</p>
            <input  type='number' name='blogPostId' min='1' placeholder='BlogPostId Here'>
        <input type='file' accept='.png, .jpg, .jpeg' name='filePath'>
        <input type='submit' name='uploadPic' value='submit'> 
    </form>

    <form method='post' action=''>
        <p class='inputnames'>Add Image to Issue</p>
            <input type='number' name='issueId' min='1' placeholder='Issue Id here'>
        <input type='file' accept='.png, .jpg, .jpeg' name='filePath'>
        <input type='submit' name='issuePicUpload' value='submit'>
</div>
<html>
    <br>
    <br>    
    <br>
    <br> 
    <br>
    <br>    
    <br>
    <br> 
    <br>
    <br>    
    <br>
    <br> 
    <br>
    <br>    
    <br>
    <br>
    <br>
    <br>    
    <br>
    <br> 
    <br>
    <br>    
    <br>
    <br> 
    <br>
    <br>    
    <br>
    <br> 
    <br>
    <br>    
    <br>
    <br>
            <div class='divbig'></div>
<?php

echoFooter();

