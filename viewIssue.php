<?php
include('config/init.php');

$result= getAllIssues();

$issue= getIssue($_GET['issueId']);

$blogPosts= getAllIssuePosts($_GET['issueId']);

echoHeader($issue['issueName']);

echo "
<div class='bordertop'></div>
<h2>".$issue['issueName']."</h2>
";

foreach($blogPosts as $blogPost){
    //what page do i want to send this to?
    echo "<a href='/viewPost.php?blogPostId=".$blogPost['blogPostId']."'>
       
        <p>".$blogPost['title']."</p>
       
         <h6> ".$blogPost['description']."</h6>

    
        </a><br />";
}