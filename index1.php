<?php
//json tanımlama ve ayrıştırma
$gercekadresi =  realpath('./../home/');
$datafile = $gercekadresi . '/data.json';
$jsonString = file_get_contents($datafile);
$data = json_decode($jsonString, true);
//döngü sabitinin veri sayısına göre ayarlanması
$count= count($data);
//hata mesajı
$error_message = 'error'; 
//jeton değişken
$loggedin = false;
//Formdan gelen verinin alınması
$username = $_GET["username"];
$password = $_GET["password"];
//kullanıcı adı ve şifre kontrolü
if($username != null){
for($i=0; $i < $count; $i++){
if ($username === $data[$i]["username"] && $password === $data[$i]["password"]) {
        $loggedin = true;
        //$valid= file_get_contents('../home/valid.json');
        //echo $valid;
        $valid = "{Success : True}";
        $output = json_encode($valid);
        $output2= json_decode($output, true);
        echo $output2;

    }
}
    if($username !=$data[$i]["username"] && $loggedin===false){
        $loggedin=true;
        echo $error_message;
    }   
}
?>