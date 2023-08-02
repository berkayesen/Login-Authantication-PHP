<?php

$gercekadresi =  realpath('./../home/');
$datafile = $gercekadresi . '/data.json';

$jsonString = file_get_contents($datafile);

$data = json_decode($jsonString, true);

$count= count($data);

$loggedin = false;



//Formdan gelen verinin alınması
$username = $_GET["username"];
$password = $_GET["password"];
 
if($username != null){
for($i=0; $i < $count; $i++){
if ($username === $data[$i]["username"] && $password === $data[$i]["password"]) {
        $loggedin = true;
        //$accept_message= $data[4]["accept"].$data[$i]["name"];
        // İstek gönderme
    $ch = curl_init('https://friend.meupwallet.com/data.json');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header
    );

    $response = curl_exec($ch);

    // İstek sonucunu kontrol etme
    if ($response === false) {
        echo 'İstek gönderilirken hata oluştu: ' . curl_error($ch);
    } else {
        echo 'İstek başarıyla gönderildi ve yanıt alındı: ' . $response[4]["accept"].$data[$i]["name"];
        exit;
    }

    // İsteği kapatma
    curl_close($ch);
    }
}
    if($username !=$data[$i]["username"] && $loggedin===false){
        $loggedin=true;
        $error_message= $data[4]["error"];
    }
    
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Kullanıcı Girişi</title>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    
    <body>
  <div class="login-container">
    <form class="login-form">
      <h2>Kullanıcı Girişi</h2>
      <label for="username">Kulanıcı Adı:</label>
      <input type="text" id="username" name="username" required minlength="6">
      <label for="password">Şifre:</label>
      <input type="password" id="password" name="password" required minlength="8">
      <button type="submit">Giriş</button>
    </form>
  </div>
  <?php if (isset($error_message)) { ?>
        <p id="error"><?php echo $error_message; ?></p>
    <?php } ?>
    <?php if (isset($accept_message)) { ?>
        <p id="accept"><?php echo $accept_message; ?></p>
    <?php } ?>
</body>
</body>
</html>
