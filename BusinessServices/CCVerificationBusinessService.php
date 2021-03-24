<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

class CCVerificationBusinessService
{
    // Class attributes
    private $cardNumber;
    private $cardCVV;
    private $cardExpirationMonth;
    private $cardExpirationYear;

    /**
     * CCVerificationBusinessService constructor.
     * @param $cardNumber
     * @param $cardCVV
     * @param $cardExpirationMonth
     * @param $cardExpirationYear
     */
    public function __construct($cardNumber, $cardCVV, $cardExpirationMonth, $cardExpirationYear)
    {
        $this->cardNumber = $cardNumber;
        $this->cardCVV = $cardCVV;
        $this->cardExpirationMonth = $cardExpirationMonth;
        $this->cardExpirationYear = $cardExpirationYear;
    }


    public function validateCC() {

        // If any values are not set then we return false
        // Very rudimentary validation function for the purpose of this assignment
        if(!isset($this->cardNumber, $this->cardCVV, $this->cardExpirationMonth, $this->cardExpirationYear)) {
            return false;
        } else {
            return true;
        }
    }


}