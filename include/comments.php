<?php

function createComment($content,$blogpostId,$userId){
    dbQuery(
        '
        INSERT INTO comments (content, blogPostId,userId)
        VALUES(:content, :blogPostId, userId)
        ',
        [
            'content'=>$content,
            'blogPostId'=>$blogPostId,            
            'userId' => $userId
        ]
    );
    return $content;
}

function getBlogPostComments($blogPostId){
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
<div><p class='p1'>Comments</p></div>
<div class='parent'>
<form action='' method='post'>
    <input class='commentinput' type='text' name='content' placeholder='Type a comment...'/><br/>
    <input class='commentbtn' type='submit' name='newComment' value='Post'/> 
</form>
</div>";
}

