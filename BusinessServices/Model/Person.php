<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU Project
 */

class Person
{
    // Class attributes
    // All attributes match all fields found in out DB (users table)
    private $ID;
    private $username;
    private $email_address;
    private $password;
    private $first_name;
    private $last_name;
    private $date_of_birth;
    private $user_role;
    private $registration_date;
    private $deleted;

    /**
     * Person constructor.
     * @param $ID
     * @param $username
     * @param $email_address
     * @param $password
     * @param $first_name
     * @param $last_name
     * @param $date_of_birth
     * @param $user_role
     * @param $registration_date
     * @param $deleted
     */
    public function __construct($ID, $username, $email_address, $password, $first_name, $last_name, $date_of_birth, $user_role, $registration_date, $deleted)
    {
        $this->ID = $ID;
        $this->username = $username;
        $this->email_address = $email_address;
        $this->password = $password;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
        $this->user_role = $user_role;
        $this->registration_date = $registration_date;
        $this->deleted = $deleted;
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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }

    /**
     * @param mixed $email_address
     */
    public function setEmailAddress($email_address)
    {
        $this->email_address = $email_address;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * @param mixed $date_of_birth
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
    }

    /**
     * @return mixed
     */
    public function getUserRole()
    {
        return $this->user_role;
    }

    /**
     * @param mixed $user_role
     */
    public function setUserRole($user_role)
    {
        $this->user_role = $user_role;
    }

    /**
     * @return mixed
     */
    public function getRegistrationDate()
    {
        return $this->registration_date;
    }

    /**
     * @param mixed $registration_date
     */
    public function setRegistrationDate($registration_date)
    {
        $this->registration_date = $registration_date;
    }

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param mixed $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

}