<?php

include('config/init.php');
echoHeader('Issues');

$issues = getAllIssues();


echo"
<div class='bordertop'></div>
<h2 class='h2feat'> Issues</h2>
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
 ";

foreach ($issues as $issue){
    echo "<a href='/viewIssue.php?issueId=".$issue['issueId']."'>
    <img class='issuecover' src='/images/Issue_Covers/".$issue['filePath']."'
    ".$issue['issueName']."
    </a>";
}
?> 
<div class='divbig'></div>
<?php
echoFooter();