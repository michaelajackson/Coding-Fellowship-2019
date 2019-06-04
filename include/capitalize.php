<?php
function capitalizeLetters($wordInput){
    $newWord="";
    $wordAsArray= str_split($wordInput);
    $randomCaps= strtoupper();
foreach($wordAsArray as $letter) {
    if (rand(0,10) < 6)
        $letter= strtoupper($letter)
    $newWord=$newWord.$letter;
}
}
return $randomCaps;

echo capitalizeLetters('frog');