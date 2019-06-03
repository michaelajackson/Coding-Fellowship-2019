<?php

function insertInventoryItem($name, $description, $category){
    dbQuery(
        '
        INSERT INTO inventory (name, description, category)
        VALUES (:name, :description, :category)
        ',
        [
            'name'=> $name
            'description'=> $description
            'category'=>$category
        ]
        );
    
}