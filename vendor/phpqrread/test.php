<?php
include_once('./QrReader.php');
$qrcode = new QrReader('./doc/qr.png');  //图片路径
$text = $qrcode->text(); //返回识别后的文本


echo $text;
