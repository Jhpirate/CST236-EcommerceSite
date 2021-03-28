<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/DataAccess/ProductDataAccess.php";

class ShoppingCart
{
    // Class attributes for a session based cart storage
    private $userID;
    private $items; //associative array (productID=>qty)
    private $itemsSubtotal; //associative array (productID=>ItemSubTotal)
    private $cartTotal;

    /**
     * ShoppingCart constructor.
     * @param $userID
     */
    public function __construct($userID)
    {
        $this->userID = $userID;
        $this->items = array();
        $this->itemsSubtotal = array();
        $this->cartTotal = 0;
    }

    // Add an item to the cart, if already in cart increment by 1
    public function addItemToCart($p_productID) {
        // Check if item is already in cart or not
        if(array_key_exists($p_productID, $this->items)) {
            // key exists, so add 1 to that item
            $this->items[$p_productID] += 1;
        } else {
            // key not found, item not in cart
            $this->items = $this->items + array($p_productID => 1);
        }
    }

    // Update product total of an existing cart item
    public function updateQty($p_productID, $p_qty) {
        if(array_key_exists($p_productID, $this->items) && $p_qty > -1) {
            $this->items[$p_productID] = $p_qty;
        }

        // If qty drops to 0, then remove the item from the cart
        if($this->items[$p_productID] == 0) {
            unset($this->items[$p_productID]);
        }
    }

    public function calculateCartTotals() {
        // Product access
        $productAccess = new ProductDataAccess();

        // calculate the sub total of the items
        $subTotalsArray = array();
        $this->cartTotal = 0;

        foreach ($this->items as $item=>$qty) {
            $product = $productAccess->findProductByID_obj($item);
            $localSubTotal = $product->getPrice() * $qty; //local variable here
            $subTotalsArray = $subTotalsArray + array($item=>$localSubTotal);

            $this->cartTotal += $localSubTotal;
        }

        $this->itemsSubtotal = $subTotalsArray;

        //calculate the cart total of all items

    }


    // -------------------------
    // GETTERS AND SETTERS BELOW (ALL PROPERTIES)
    // -------------------------

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param mixed $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getItemsSubtotal()
    {
        return $this->itemsSubtotal;
    }

    /**
     * @param array $itemsSubtotal
     */
    public function setItemsSubtotal($itemsSubtotal)
    {
        $this->itemsSubtotal = $itemsSubtotal;
    }

    /**
     * @return int
     */
    public function getCartTotal()
    {
        return $this->cartTotal;
    }

    /**
     * @param int $cartTotal
     */
    public function setCartTotal($cartTotal)
    {
        $this->cartTotal = $cartTotal;
    }

}