<?php

function createComment($content){
    dbQuery(
        '
        INSERT INTO comments (content, blogPostId)
        VALUES(:content, :blogPostId)
        ',
        [
            'content'=>$content,
            'blogPostId'=>$_REQUEST['blogPostId']
        ]
    );
return $content;
}

function getAllComments($blogPostId){
    $result=dbQuery('
        SELECT *
        FROM comments
        WHERE blogPostId = :blogPostId
    ',array('blogPostId'=>$blogPostId)
    )->fetchAll();
    return $result;
}

function echoCommentSection(){
    echo"
<div class='divbig'></div>
<div class='divbig'></div>
<div class='bordertop'><p class='p1'>Comments</p></div>
<div class='parent'>
<form action='' method='post'>
    <input class='commentinput' type='text' name='content' placeholder='Type a comment...'/><br/>
    <input class='commentbtn' type='submit' name='newComment' value='Post'/>
</form>
</div>";
}