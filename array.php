<?php
// Veri
$data = array(
    array(
    'username' => 'berkay',
    'password' => '123',
    'name' => 'Berkay Esen',
    'email' => 'berkayesen@example.com',
    'age' => 23
    ),
    array(
        'username' => 'ahmet',
        'password' => '123',
        'name' => 'Ahmet Yilmaz',
        'email' => 'ahmet@example.com',
        'age' => 39
    ),
    array(
        'username' => 'fatma',
        'password' => '123',
        'name' => 'Fatma Yildirim',
        'email' => 'fatma@example.com',
        'age' => 15
    ),
    array(
        'username' => 'hatice',
        'password' => '123',
        'name' => 'Hatice Keskin',
        'email' => 'hatice@example.com',
        'age' => 51
    )
    

);
//header json
header(array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)));
//

// JSON dönüştürme
$jsonData = json_encode($data);

echo $jsonData
?>