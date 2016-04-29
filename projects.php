<?php 
    include 'includes/config.php';
    include 'menu_item_class.php';
    include 'includes/header.php';
    include 'taco_cart.php';
    
    $cart = new Cart();
    setlocale(LC_MONETARY, 'en_US');

/* 
$toAddress = "spinifex@gmail.com";  
$toName = "ITC 240"; 
$website = "Spinifex Questionnaire";  
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; 
$dateFeedback = true; 
include_once 'includes/config.php';
include 'includes/contact-lib/contact_include.php';
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
    {#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
        handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             
    ?>
    <!-- START HTML FEEDBACK -->
    <div class="contact-feedback">
        <h2>We have recieved your response!</h2>
        <p>Thanks for the input!</p>
        <p>We'll respond within 48 hours, if you requested information.</p>
    </div>    
    <!-- END HTML FEEDBACK -->        
    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA 
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback
*/  
?>

<h1>Order Your Baja Tacos Here!</h1>

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
<!--
    <div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Phone:<br /><input type="tel" name="Phone" required="required" placeholder="Phone (required)" title="A valid phone is required" tabindex="20" size="44" />
		</label>
	</div>
    	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="" placeholder="Email" title="A valid email is requested" tabindex="20" size="44" />
		</label>
	</div>    
    <p></p>    
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us, thank you!" tabindex="60"></textarea>
		</label>
	</div>	
-->
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
	<div>
		<input type="Submit" value="Submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
</section>
<?php include 'includes/aside2.php';?>
<?php 
/*
include 'includes/footer.php';
*/
?>