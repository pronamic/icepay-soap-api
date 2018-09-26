<?php

class Icepay_Paymentmethod_Mistercash extends Icepay_Paymentmethod
{
    public $_version       = "2.5.4";
    public $_method        = "MISTERCASH";
    public $_readable_name = "MisterCash";
    public $_issuer        = array('MISTERCASH');
    public $_country       = array('BE', 'NL');
    public $_language      = array('DE', 'EN', 'ES', 'FR', 'IT', 'NL');
    public $_currency      = array('EUR');
    public $_amount        = array('minimum' => 1, 'maximum' => 100000000);
}

?>
