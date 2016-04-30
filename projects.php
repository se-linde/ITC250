<?php 
    include 'includes/config.php';
    include 'menu_item_class.php';
    include 'includes/header.php';
    include 'taco_cart.php';
    
    $cart = new Cart();
    setlocale(LC_MONETARY, 'en_US');
?>

<h1>Order Your Baja Tacos Here!</h1><p>
<h3>Note: If you would like to order more than 9 of any item, please contact our Catering Department at 206-555-1212, and ask for Bones Tacoman.</h3><p>

<section>
    <!-- START HTML FORM -->
    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">

	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
		
        <!-- Iterate across each food item in the menu array. -->
        <h2>Main Dishes</h2>   
        <?php 
            foreach($items as $item){
                echo '<div class=menu_item>	
                        <label>
                            <h3>'.$item->name.'</h3>
                            <p>'.$item->description.'</p>
                            <select name="'.$item->name.'" required title="0" tabindex="15">
                                    <option value="0">Please choose the quantity:</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                            </select>
                        </label>
                    </div>';
                if(isset($_POST[str_replace(' ','_',$item->name)])){
                    if($_POST[str_replace(' ','_',$item->name)] > 0){
                        $item->quantity = intval($_POST[str_replace(' ','_',$item->name)]);
                    }
                }
            }
        ?>
        
        <h2>Sides</h2>    
        <?php 
            foreach($sides as $side){
                echo '<div class=side_item>	
                        <label>
                            <h3>'.$side->name.'</h3>
                            <p>'.$side->description.'</p>
                            <select name="'.$side->name.'" required title="0" tabindex="15">
                                    <option value="0">Please choose the quantity:</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                            </select>
                        </label>
                    </div>';
            }
        ?>
        
    <p></p>    

    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
	<div>
		<input type="Submit" value="Order your delicious food here!" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
</section>
<?php include 'includes/aside2.php';?>
