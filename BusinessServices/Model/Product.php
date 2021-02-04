<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

class Product
{
    // Class Attributes
    private $ID;
    private $product_name;
    private $product_description;
    private $size;
    private $color;
    private $price;

    /**
     * Product constructor.
     * @param $ID
     * @param $product_name
     * @param $product_description
     * @param $size
     * @param $color
     * @param $price
     */
    public function __construct($ID, $product_name, $product_description, $size, $color, $price)
    {
        $this->ID = $ID;
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->size = $size;
        $this->color = $color;
        $this->price = $price;
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
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }

    /**
     * @return mixed
     */
    public function getProductDescription()
    {
        return $this->product_description;
    }

    /**
     * @param mixed $product_description
     */
    public function setProductDescription($product_description)
    {
        $this->product_description = $product_description;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

}