<?php

 require __DIR__.'/vendor/autoload.php';


 use \App\Pix\Payload;

 $obPayload =  (new Payload)->setPixKey('infogustavomelo@gmail.com')
                            ->setDescription('Pagamento do pedido 01')
                            ->setMerchantName('Gustavo Melo')
                            ->setMerchantCity('São Paulo')
                            ->setTxid('pay01')
                            ->setAmount(100.00);
$payloadQrCode = $obPayload->getPayload();

echo '<pre>';
print_r($payloadQrCode);