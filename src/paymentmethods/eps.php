<?php

class Icepay_Paymentmethod_Eps extends Icepay_Paymentmethod
{
    public $_version       = "2.5.4";
    public $_method        = "EPS";
    public $_readable_name = "EPS";
    public $_issuer        = array('DEFAULT');
    public $_country       = array('AT', 'DE');
    public $_language      = array('DE');
    public $_currency      = array('EUR');
    public $_amount        = array('minimum' => 1, 'maximum' => 100000000);
}

?>
