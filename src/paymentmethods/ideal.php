<?php

class Icepay_Paymentmethod_Ideal extends Icepay_Paymentmethod
{
    public $_version       = "2.5.4";
    public $_method        = "IDEAL";
    public $_readable_name = "iDEAL";
    public $_issuer        = array('ABNAMRO', 'ASNBANK', 'BUNQ', 'ING', 'KNAB', 'RABOBANK', 'SNSBANK', 'SNSREGIOBANK', 'TRIODOSBANK', 'VANLANSCHOT');
    public $_country       = array('NL');
    public $_language      = array('NL', 'DE', 'EN', 'ES', 'FR', 'IT');
    public $_currency      = array('EUR');
    public $_amount        = array('minimum' => 1, 'maximum' => 100000000);
}

?>
