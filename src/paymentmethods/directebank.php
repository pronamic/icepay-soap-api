<?php

class Icepay_Paymentmethod_Directebank extends Icepay_Paymentmethod
{
    public $_version       = "2.5.4";
    public $_method        = "DIRECTEBANK";
    public $_readable_name = "SOFORT Banking";
    public $_issuer        = array('RETAIL', 'DIGITAL', 'ADULT');
    public $_country       = array('AT', 'BE', 'CH', 'DE', 'ES', 'FR', 'IT', 'NL', 'PL');
    public $_language      = array('DE', 'EN', 'NL', 'ES');
    public $_currency      = array('EUR', 'PLN');
    public $_amount        = array('minimum' => 1, 'maximum' => 100000000);
}

?>
