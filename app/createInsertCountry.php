<?php

$string = file_get_contents("../database/country.json");
$json_a = json_decode($string, true);
$insert = "INSERT INTO country (code,name) VALUES";
foreach ($json_a as $key =>  $item) {
    $insert .= "("."\"{$json_a[$key]['code']}\",\"{$json_a[$key]['name']}\"),";
}
echo substr($insert,0,-1).';';