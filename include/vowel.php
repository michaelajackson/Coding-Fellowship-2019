<?php

function vowelCount($inputWord){
    $countNumVow=0;
    $wordAsArray= str_split($inputWord);
    foreach($wordAsArray as $letter) {
        if ($letter=='a'||$letter=='e'||$letter=='i'||$letter=='o'||$letter=='u')
           $countNumVow++;
    }
    return $countNumVow;
}
echo vowelCount('Michaela');

