<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

class Order
{
    private $ID;
    private $date;
    private $userID_FK;
    private $user_address_FK;
    private $total;

    /**
     * Order constructor.
     * @param $ID
     * @param $date
     * @param $userID_FK
     * @param $user_address_FK
     * @param $total
     */
    public function __construct($ID, $date, $userID_FK, $user_address_FK, $total)
    {
        $this->ID = $ID;
        $this->date = $date;
        $this->userID_FK = $userID_FK;
        $this->user_address_FK = $user_address_FK;
        $this->total = $total;
    }

    // GETTERS AND SETTERS

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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getUserIDFK()
    {
        return $this->userID_FK;
    }

    /**
     * @param mixed $userID_FK
     */
    public function setUserIDFK($userID_FK)
    {
        $this->userID_FK = $userID_FK;
    }

    /**
     * @return mixed
     */
    public function getUserAddressFK()
    {
        return $this->user_address_FK;
    }

    /**
     * @param mixed $user_address_FK
     */
    public function setUserAddressFK($user_address_FK)
    {
        $this->user_address_FK = $user_address_FK;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

}