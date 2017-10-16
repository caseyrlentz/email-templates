<?php 

$str = file_get_contents('splash-email-data.json');
$json = json_encode($str);
$json = json_decode($str, true);


foreach($json as $emailTemplate) { 

$newName = preg_replace("/[\s-]+/", " ", $emailTemplate['name']);
$newName = preg_replace("/[\s_]/", "-", $newName);
$newName = strtolower($newName);


}