<?php
require 'vendor/autoload.php';
use Firebase\JWT\JWT;use Firebase\JWT\Key;

$sec_key ='85ldofi';
$payload = array (
    'isd' =>'localhost',
    'aud' =>'localhost',
    'username' =>'berkay',
    'password' =>'12345678'
);
$encode = JWT :: encode($payload,$sec_key,'HS256');
$decode = JWT :: decode($encode,new Key($sec_key,'HS256'));
//print_r($decode);
echo $encode;
$decode->username;
?>