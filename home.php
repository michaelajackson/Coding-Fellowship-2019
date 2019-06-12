<html>
   
<?php
 include('config/init.php');
 echoHeader('Courtyard Collective');
 
 if(isset($_REQUEST['newEmail'])){
    getEmail(
        $_REQUEST['email']
    );
}

?> 

 <h2 class='h2italic'>Featured</h2>
 
<div>
<div class='bordertop'>
    <p class='p1'>this week</p>
    <img src='trees.JPG' class='responsiveImage'/>
    <a href= "post.html"><h2>Blah Blah Blah</h2></a>
    <p>Description about post...</p>
    <h6>00/00/00</h6>
</div>

<div class='divbig'></div>

<div class='card; bordertop'>
    <p class='p1'>featured poetry</p>
            <div class= 'parent'>
                <div class='child'>
                <div class='pic4'></div></div>
                <div class='child'><a href='post.php'><h4>Title</h4> </a></div>
            
                <div class='child'>
                <div class='pic3'></div>
                <div class= 'child'><a href='post.php'><h4>Title</h4> </a></div>
            </div>
</div>
            <div class='parent'>
                <div class='child'>
                <div class='pic2'></div></div>
                <div class='child'><a href='post.php'><h4>Title</h4> </a></div>
            
                <div class='child'>
                <div class=pic></div>
                <div class='child'><a href='post.php'><h4>Title</h4> </a></div>
            </div>
    </div>

</div>

<div>

<div class='card; bordertop'>
    <p class='p1'>featured writing</p>
</div>

</div>


</div>  
<div class='divbig'></div>
</body>
<?php
echoFooter();
?>

</html>
