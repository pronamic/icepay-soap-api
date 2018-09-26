<?php

class Icepay_Paymentmethod_Ddebit extends Icepay_Paymentmethod
{
    public $_version       = "2.5.4";
    public $_method        = "DDEBIT";
    public $_readable_name = "Direct Debit";
    public $_issuer        = array('INCASSO');
    public $_country       = array('AT', 'BE', 'CH', 'CZ', 'DE', 'EE', 'ES', 'FI', 'FR', 'HU', 'IR', 'IT', 'LI', 'LU', 'MT', 'NL', 'PL', 'PT', 'SE', 'SK', 'SL', 'UK');
    public $_language      = array('NL', 'EN');
    public $_currency      = array('EUR');
    public $_amount        = array('minimum' => 1, 'maximum' => 200000);
}

?>
