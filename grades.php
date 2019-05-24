<?php
$input1= 59;

if($input1>59){
    $comparisontext='First Division';
}
elseif($input1<60 || >44){
    $comparisontext='Second Division';
}

echo "The grade ".$input1."% is a ".$comparisontext." grade."; 