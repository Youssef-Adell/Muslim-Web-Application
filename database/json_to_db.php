<?php

//---database connection---
$dns = 'mysql:host=localhost; dbname=muslim';
$user = 'root';
$pass = '';
$pdo = new PDO($dns, $user, $pass);

//---prepare Sql statment---
$statment = $pdo->prepare('INSERT INTO sour VALUES (:id, :name, :url)');

//---read data from json file then convert it to asocciative array---
$jsonData = file_get_contents('sourData.json');
$sour = json_decode($jsonData, JSON_OBJECT_AS_ARRAY);

//---loop on array and insert each row into database---
$inserted_rows = 0;
foreach ($sour as $soura) {
    $id = $soura['id'];
    $name = $soura['name'];
    $url = $soura['url'];

    $statment->execute(['id' => $id, 'name' => $name, 'url' => $url]);

    $inserted_rows++;
}

//---check if all rows in json file inserted into database---
if (count($sour) == $inserted_rows) {
    echo 'Success';
} else {
    echo 'Error';
}
