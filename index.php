<?php
echo "SELAMIN ALEYKÜM</br>";
//acıklama- comment
/*çok satırlı açıklama*/
$masa=4;
$sıra=4;
$sonuc=$masa+$sıra;

$adi="barış";
echo $adi,"</br>",$sonuc;
echo $adi,4+4;
$soyadi="çeliker";
echo $adi.$soyadi;
define("BOLUM","</br>Yönetim Bilişim Sistemleri");
echo BOLUM;


?>
<!DOCTPYE html>
<head>
</head>
<body>
<form method="POST" action="kontrol.php">
<label>Kullanıcı adı</label>
 <input id="eposta" name="eposta" type="text" >
 </br>
 <label>şifre:</label>
 <input id="şifre" name="şifre" type="password">
 <input type="submit">
</form>
</body>
</html>
