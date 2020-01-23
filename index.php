<?php
require __DIR__ . '/vendor/autoload.php';

use Endroid\QrCode\QrCode;

$qrCode = new QrCode('https://arxist.com/linkiniji');
$qrCode->setSize(300);

$qrCode->setLogoPath(__DIR__.'/images/logo.png');
$qrCode->setRoundBLockSize(true);
$qrCode->setLogoSize(80, 80);
$qrCode->setMargin(10);

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
?>