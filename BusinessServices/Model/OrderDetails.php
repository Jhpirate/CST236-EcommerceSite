<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

class OrderDetails
{
    private $ID;

    private $orderID;
    private $productID;
    private $order_qty;
    private $current_item_price;
    private $current_item_desc;

    /**
     * OrderDetails constructor.
     * @param $orderID
     * @param $productID
     * @param $order_qty
     * @param $current_item_price
     * @param $current_item_desc
     */
    public function __construct($orderID, $productID, $order_qty, $current_item_price, $current_item_desc)
    {
        $this->orderID = $orderID;
        $this->productID = $productID;
        $this->order_qty = $order_qty;
        $this->current_item_price = $current_item_price;
        $this->current_item_desc = $current_item_desc;
    }


    /**
     * @return mixed
     */
    public function getOrderQty()
    {
        return $this->order_qty;
    }

    /**
     * @param mixed $order_qty
     */
    public function setOrderQty($order_qty)
    {
        $this->order_qty = $order_qty;
    }

    /**
     * @return mixed
     */
    public function getCurrentItemDesc()
    {
        return $this->current_item_desc;
    }

    /**
     * @param mixed $current_item_desc
     */
    public function setCurrentItemDesc($current_item_desc)
    {
        $this->current_item_desc = $current_item_desc;
    }

    /**
     * @return mixed
     */
    public function getCurrentItemPrice()
    {
        return $this->current_item_price;
    }

    /**
     * @param mixed $current_item_price
     */
    public function setCurrentItemPrice($current_item_price)
    {
        $this->current_item_price = $current_item_price;
    }

    /**
     * @return mixed
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @param mixed $productID
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
    }

    /**
     * @return mixed
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * @param mixed $orderID
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
    }

}