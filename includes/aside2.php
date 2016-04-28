<h1><em>Your order: </em></h1>

<p>
    <?php 
    foreach($items as $item){
        if($item->quantity > 0){
            
        }
    }
    ?>
</p>

<p>
    Subtotal: <?='$'.money_format($cart->getSubtotal($items),2);?>
</p>
<p>
    Tax: <?='$'.money_format($cart->getTax($items),2)?>
</p>
<p>
    Total: <?='$'.money_format($cart->getTotal($items),2)?>
</p>

