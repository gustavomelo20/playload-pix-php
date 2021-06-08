<?php

namespace App\Pix;

class Payload{
 
      /**
   * IDs do Payload do Pix
   * @var string
   */
        const ID_PAYLOAD_FORMAT_INDICATOR = '00';
        const ID_MERCHANT_ACCOUNT_INFORMATION = '26';
        const ID_MERCHANT_ACCOUNT_INFORMATION_GUI = '00';
        const ID_MERCHANT_ACCOUNT_INFORMATION_KEY = '01';
        const ID_MERCHANT_ACCOUNT_INFORMATION_DESCRIPTION = '02';
        const ID_MERCHANT_CATEGORY_CODE = '52';
        const ID_TRANSACTION_CURRENCY = '53';
        const ID_TRANSACTION_AMOUNT = '54';
        const ID_COUNTRY_CODE = '58';
        const ID_MERCHANT_NAME = '59';
        const ID_MERCHANT_CITY = '60';
        const ID_ADDITIONAL_DATA_FIELD_TEMPLATE = '62';
        const ID_ADDITIONAL_DATA_FIELD_TEMPLATE_TXID = '05';
        const ID_CRC16 = '63';


        private $pixKey;


        private $description;


        private $merchantName;


        private $merchantCity;


        private $txid;


        private $amount;


        public function setPixKey($pixKey){
             $this->pixKey = $pixKey;
            return $this;
        }

        public function setDescription($description){
            $this->description = $description;
           return $this;
        }
        public function setMerchantName($merchantName){
            $this->merchantName = $merchantName;
           return $this;
        }

        public function setMerchantCity($merchantCity){
            $this->merchantCity = $merchantCity;
           return $this;
        }

        public function setTxid($txid){
            $this->txid = $txid;
           return $this;
        }

        public function setAmount($amount){
            $this->amount = (string)number_format($amount,2, '.', ' ');
            return $this;
        }






}