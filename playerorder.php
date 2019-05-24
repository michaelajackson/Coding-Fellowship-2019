<?php
$employees=[
    ["Name"=>"Reno",
    "Number"=>1],
    ["Name"=>"Kelly",
    "Number"=>2],
    ["Name"=>"Jesse",
    "Number"=>3],
    ["Name"=>"Michaela",
    "Number"=>4]
];
$randomValue = rand(0,3);
// foreach($randomValue as $Individualemployees);

echo $employees[$randomValue]["Name"];

