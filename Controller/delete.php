<?php
require '../vendor/autoload.php'; 

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

$id=$_GET['id'];

$deleteResult = $empcollection->deleteOne(
    ['_id' => $id]
);

printf("Deleted %d documents", $deleteResult->getDeletedCount());
header("Location:../index.php");

/*
$deleteResult = $empcollection->deleteMany(
    ['name' => 'Ethan']
);
printf("Deleted %d documents", $deleteResult->getDeletedCount());
*/
?>