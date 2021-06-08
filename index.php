<?php

 require __DIR__.'/vendor/autoload.php';


 use \App\Pix\Payload;

 $obPayload =  (new Payload)->setPixKey('infogustavomelo@gmail.com');

echo '<prev>';
 print_r($obPayload);