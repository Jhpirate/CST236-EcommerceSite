<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU Project
 */

class Address
{
    // Class attributes
    // All attributes match all fields found in out DB (user_addresses table)
    private $ID;
    private $is_default;
    private $address_name;
    private $address1;
    private $address2;
    private $city;
    private $state;
    private $zip_code;

    /**
     * Address constructor.
     * @param $ID
     * @param $is_default
     * @param $address_name
     * @param $address1
     * @param $address2
     * @param $city
     * @param $state
     * @param $zip_code
     */
    public function __construct($ID, $is_default, $address_name, $address1, $address2, $city, $state, $zip_code)
    {
        $this->ID = $ID;
        $this->is_default = $is_default;
        $this->address_name = $address_name;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->state = $state;
        $this->zip_code = $zip_code;
    }

    // --------------------
    // GETTERS AND SETTERS
    // --------------------
    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getIsDefault()
    {
        return $this->is_default;
    }

    /**
     * @param mixed $is_default
     */
    public function setIsDefault($is_default)
    {
        $this->is_default = $is_default;
    }

    /**
     * @return mixed
     */
    public function getAddressName()
    {
        return $this->address_name;
    }

    /**
     * @param mixed $address_name
     */
    public function setAddressName($address_name)
    {
        $this->address_name = $address_name;
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param mixed $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param mixed $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * @param mixed $zip_code
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;
    }

}