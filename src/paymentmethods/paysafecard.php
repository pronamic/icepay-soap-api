<?php

class Icepay_Paymentmethod_Paysafecard extends Icepay_Paymentmethod
{
    public $_version       = "2.5.4";
    public $_method        = "PAYSAFECARD";
    public $_readable_name = "PaySafeCard";
    public $_issuer        = array('DEFAULT');
    public $_country       = array('00');
    public $_language      = array('00');
    public $_currency      = array('EUR', 'USD', 'GBP', 'HUF', 'ARS', 'CHF', 'CZK', 'DKK', 'MXN', 'NOK', 'PLN', 'RON', 'SEK');
    public $_amount        = array('minimum' => 1, 'maximum' => 100000000);
}

?>
