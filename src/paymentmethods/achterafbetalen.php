<?php

class Icepay_Paymentmethod_Achterafbetalen extends Icepay_Paymentmethod
{
    public $_version       = "2.5.4";
    public $_method        = "ACHTERAFBETALEN";
    public $_readable_name = "Achterafbetalen";
    public $_issuer        = array('DEFAULT');
    public $_country       = array('NL');
    public $_language      = array('NL', 'EN');
    public $_currency      = array('EUR');
    public $_amount        = array('minimum' => 1, 'maximum' => 1000000000);
}

?>
