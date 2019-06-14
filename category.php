
<?php

include('config/init.php');
echoHeader('Categories');

$categories = getAllCategories();


echo "
<div class='bordertop'></div>
<h2> Categories</h2>
";

foreach($categories as $category){
    //what page do i want to send this to?
    echo "<a href='/viewCategory.php?categoryId=".$category['categoryId']."'>
        ".$category['name']."
        </a><br />";
}
?>
<html>
    <div class='divbig'></div>
</html>
<?php
echoFooter();
?>

