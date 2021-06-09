<?php

 require __DIR__.'/vendor/autoload.php';

 
 use \App\Pix\Payload;
 use Mpdf\QrCode\QrCode;
 use Mpdf\QrCode\Output;

 $obPayload =  (new Payload)->setPixKey('infogustavomelo@gmail.com')
                            ->setDescription('Pagamento do pedido 01')
                            ->setMerchantName('Gustavo Melo')
                            ->setMerchantCity('São Paulo')
                            ->setTxid('pay01')
                            ->setAmount(0.01);
$payloadQrCode = $obPayload->getPayload();

$obQrcode = new QrCode($payloadQrCode);

$image = (new Output\Png)->output($obQrcode, 400);

header('Content-Type: image/png');

echo $image;


//  echo '<pre>';
//print_r($payloadQrCode);