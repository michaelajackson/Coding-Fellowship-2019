
<?php

include('config/init.php');
echoHeader('Categories');

$category = getAllCategoryPost();


echo "
<h2> Categories</h2>
";

foreach($category as $categories){
    //what page do i want to send this to?
    echo "<a href='/viewCategory.php?categoryId=".$categories['categoryId']."'>
        ".$categories['name']."
        </a><br />";
}
?>
<html>
    <div class='divbig'></div>
</html>
<?php
echoFooter();
?>

