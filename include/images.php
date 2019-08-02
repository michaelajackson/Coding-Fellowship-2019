<?php
function insertImage($filePath){
    dbQuery('
        INSERT INTO images (filePath)
        VALUE (:filePath)
    ',
    [
        'filePath'=>$filePath
    ]);
}