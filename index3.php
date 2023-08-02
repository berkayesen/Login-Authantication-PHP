<?php
$loggedin = true;
// Form gönderildiğinde çalışacak kod
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET["username"];
    $password = $_GET["password"];

    // İstek gönderme
$ch = curl_init('https://friend.meupwallet.com/array.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header
);

$response = curl_exec($ch);
curl_close($ch);

$obj = json_decode($response,true);
$count= count($obj);


    // Kullanıcı adı ve şifre doğrulama
    for($i=0; $i < $count; $i++){
    if ($username === $obj[$i]["username"] && $password === $obj[$i]["password"]) {
        $loggedin = true;
        echo "Başarıyla giriş yapıldı. Hoş geldin, ".$obj[$i]["name"];
        break;
    }
    elseif($username === null){
       $loggedin=true;
    }
    elseif($username !=$obj[$i]["username"]){
       $loggedin=false;
        $error_message = "Geçersiz kullanıcı adı veya şifre.";
    }
    
    }
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kullanıcı Girişi</title>
</head>
<body>
<?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
    <h2>Kullanıcı Girişi</h2>
    
    <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Kullanıcı Adı:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Şifre:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Giriş">
    </form>
</body>
</html>
