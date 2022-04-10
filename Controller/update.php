<?php
require '../vendor/autoload.php'; 

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

if (isset($_POST)) {
    $id=isset($_POST['id']) ? $_POST['id']:false;
    $name=isset($_POST['name']) ? $_POST['name']:false;
    $skill=isset($_POST['skill']) ? $_POST['skill']:false;
    $age=isset($_POST['skill']) ?$_POST['age']:false;

    $updateResult = $empcollection->updateMany(
        ['_id' => $id],    [
            '$set' => [
                "name" => $name,
                "age" => $age,
                "skill" => $skill,
            ],
        ]
    
    );
    printf("Matched %d documents \n", $updateResult->getMatchedCount());
    printf("Modified %d documents \n", $updateResult->getModifiedCount());
    header("Location:../index.php");
}




/*
$updateResult = $empcollection->updateMany(
    [],
    ['$set' => ['age' => '28']]
);
printf("Matched %d documents \n", $updateResult->getMatchedCount());
printf("Modified %d documents \n", $updateResult->getModifiedCount());
*/

/*
$replaceResult = $empcollection->replaceOne(
    ['_id' => '4'],
    ['_id' => '4', 'favColor' => 'blue']
);

printf("Matched %d documents \n", $replaceResult->getMatchedCount());
printf("Modified %d documents \n", $replaceResult->getModifiedCount());
*/

?>