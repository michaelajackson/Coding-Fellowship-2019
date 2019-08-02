<?php
include('config/init.php');


if(checkIsAdmin($_SESSION['userId'])){

echoHeader('Admin Page');

if(isset($_REQUEST['updateFeatured'])){
    updateFeaturedPosts($_POST['blogPostId']);
}
if(isset($_REQUEST['deleteFeatured'])){
    deleteFeaturedPost($_REQUEST['blogPostId']);
}
?>

<div class='bordertop'></div>

<?php
    echo "

    <form action= '' method = 'post'>
        <p>Featured Posts</p>
            <input  type='number' name='blogPostId' min='1'>
            <input  type='submit' name='updateFeatured' value='Update'>
            <input  type='submit' name='deleteFeatured' value='Delete'>
     </form>";

?>

<html>
    <br>
        
    
            <div class='divbig'></div>
<?php

echoFooter();

}
else{
    header('location: login_page.php');
}