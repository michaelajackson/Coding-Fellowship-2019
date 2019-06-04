<?php

function createComment($content){
    dbQuery(
        '
        INSERT INTO comments (content)
        VALUES(:content)
        ',
        [
            'content'=>$_REQUEST['content']
        ]
    );
//return $content;
}