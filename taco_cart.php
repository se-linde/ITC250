<?php

/**
 * Cart class, tracks quantity and cost of items in an online shopping cart.
 *
 * @author Sam McHaney
 */
class Cart {
    
    public $SALES_TAX = 0.095;
    public $items = array();
    
    public function __construct(){
        
    }
    
    /*
     * Adds a new food item to the current cart.
     * If it already exists in the cart, it OVERWRITES the existing quantity
     * with the new one.
     */
    public function addItem($item){
        if(array_key_exists($item->name,$this->items)){
            $this->items[$item->name] = $item;
        } else {
            $this->items[$item->name] = $item;
        }
    }
    
    /*
     * Removes item from the cart by quantity, if quantity to remove is greater
     * than quantity in cart, the item is removed entirely.
     */
    public function removeQ($item, $quantity){
        if(array_key_exists($item->name,$this->items)){
            if($quantity < $this->items[$item->name]->quantity){
                $this->items[$item->name]->quantity -= $quantity;
            } else {
                $this->removeItem($item);
            }
        }
        
    }
    
    /*
     *  Removes all items from the cart
     */
    public function removeItem($item){
        if(key_exists($item->name, $this->items)){
            unset($this->items[$item->name]);
        }
    }
    
    /*
     *  Returns subtotal (untaxed) for items in the cart.
     */
    public function getSubtotal(){
        $subTotal = 0.0;
        if (count($this->items != 0)){
            foreach ($this->items as $item){
                $subTotal += ($item->cost * $item->quantity);
            }
        }
        return $subTotal;
        
    }
    
    /*
     *  Returns total tax for items in cart if items are in the cart, or else
     * returns 0.
     */
    public function getTax(){
        $tax = 0.0;
        if(count($this->items != 0)){
            $tax = ($this->getSubtotal() * $this->SALES_TAX);
        }
        return $tax;
    }
    
    /*
     *  Returns total cost for items in cart if not empty, else returns 0.
     */
    public function getTotal(){
        $total = 0.0;
        if(count($this->items) != 0){
            $total = ($this->getTax() + $this->getSubtotal());
        }
        return $total;
    }
    
}
