<?php 

namespace Hcode\PagSeguro;

class Payment {
    private $mode = "defaul";
    private $currency = "BRL";
    private $extraAmount = 0;
    private $reference = "";
    private $items = [];
    private $sender;
    private $shipping;
    private $method;
    private $creditCard;
    private $bank;
}



