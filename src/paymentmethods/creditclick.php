<?php

class Icepay_Paymentmethod_Creditclick extends Icepay_Paymentmethod
{
    public $_version       = "2.5.4";
    public $_method        = "CREDITCLICK";
    public $_readable_name = "CreditClick";
    public $_issuer        = array('DEFAULT');
    public $_country       = array('NL');
    public $_language      = array('00');
    public $_currency      = array('EUR');
    public $_amount        = array('minimum' => 1, 'maximum' => 100000000);
}

?>
