<?php

require "helpers.php";


$collection = collect(["daniel", "david"]);

$push = $collection->concat("jessica")->concat("ponce")->all();

echo "<pre>";

var_dump($push);

echo "</pre>";