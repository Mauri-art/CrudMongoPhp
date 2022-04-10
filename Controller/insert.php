<?php
require '../vendor/autoload.php'; 

$id=$_POST["id"];
$name=$_POST["name"];
$age=$_POST["age"];
$skill=$_POST["skill"];

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;
$insertOneResult = $empcollection->insertOne(
    ['_id' => $id, 'name' => $name, 'age' => $age, 'skill' => $skill]
);
printf("Inserted %d documents", $insertOneResult->getInsertedCount());
var_dump($insertOneResult->getInsertedId());
header("Location:../index.php");
/*
$insertManyResult = $empcollection->insertMany([
    ['_id' => '2', 'name' => 'Brad', 'age' => '26', 'skill' => 'mongoDB'],
    ['_id' => '3', 'name' => 'Chris', 'age' => '30', 'skill' => 'nodejs'],
    ['_id' => '4', 'name' => 'Debbie', 'age' => '22', 'skill' => 'angular']
]);
*/
?>