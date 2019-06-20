<?php

include('config/init.php');
echoHeader('Issues');

$issues = getAllIssues();


echo"
<div class='bordertop'></div>
<h2> Issues</h2> ";

foreach ($issues as $issue){
    echo "<a href='/viewIssue.php?issueId=".$issue['issueId']."'>
    ".$issue['issueName']."
    </a><br />";
}
?> 
<div class='divbig'></div>
<div class='divbig'></div>
<?php
echoFooter();