
<?php

include('config/init.php');
echoHeader('Categories');

$categories = getAllCategories();


echo "
<div class='bordertop'></div>
<h2 class='h2feat'> Categories</h2>
";

foreach($categories as $category){
    //what page do i want to send this to?
    echo "<a class='categorybtn' href='/viewCategory.php?categoryId=".$category['categoryId']."'>
        ".$category['name']."
        </a> <br><br><br><br>";
}
?>
<html>
    <br><br><br><br><br><br><br><br>
    <div class='divbig'></div>
</html>
<?php
echoFooter();
?>

