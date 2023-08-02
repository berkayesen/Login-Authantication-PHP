<?php
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
    echo 'İstek başarıyla gönderildi ve yanıt alındı: ' . $response;
}

// İsteği kapatma
curl_close($ch);
?>