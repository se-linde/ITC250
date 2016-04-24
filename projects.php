<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?> 


<h3>Order Your Baja Tacos Here!</h3>


<?php

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
 
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
		
    <div>	
		<label>
			Mahi Mahi Tacos!<br />
            A delicious combination of fresh Mahi Mahi, with seasoned coleslaw. <br />
            $9.95 per order. <br />
			<select name="Mahi_Mahi_Tacos" required title="0" tabindex="15">
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
                <p></p>
			</select>
		</label>
	</div>
    
        <div>	
		<label>
			Halibut Tacos!<br />
            Alaskan Halibut with just the right amount of spice!! <br />
            $13.95 per order. <br />
			<select name="Halibut_Tacos" required title="0" tabindex="15">
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
	</div>
    
        <div>	
		<label>
			Shrimp Tacos!<br />
            Baja style shrimp with your choice of soft or hard shell. <br />
            $7.95 per order. <br />
			<select name="Shrimp_Tacos" required title="0" tabindex="15">
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
	</div>
    
    <div>	
		<label>
			Tofu Tacos!<br />
            Vegetarians escape to the gulf of Mexico with this habanero-infused delight. <br />
            $6.95 per order. <br />
			<select name="Tofu_Tacos" required title="0" tabindex="15">
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
	</div>
    
    <div>	
		<label>
			Big Kahuna Burrito!<br />
            A mega combo of steak, chicken, and chorizo, mixed with chipotle beans. <br />
            $9.95 per order. <br />
			<select name="Big_Kahuna_Burrito" required title="0" tabindex="15">
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
	</div>
    
    <div>	
		<label>
			Gazpacho!<br />
            Andalusian cold soup, served with fresh corn tortillas. <br />
            $9.95 per order. <br />
			<select name="Mahi_Mahi_Tacos" required title="0" tabindex="15">
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
	</div>
        
        
	<div>	
		<fieldset>
			<legend>What Foods do you Like?</legend>
			<input type="checkbox" name="Foods[]" value="Vegemite" tabindex="40" /> Vegemite price="$11.95"<br />
			<input type="checkbox" name="Foods[]" value="Biscuits" /> Biscuits price="$11.95"<br />
			<input type="checkbox" name="Foods[]" value="Stew" /> Stew price="$11.95"<br />
			<input type="checkbox" name="Foods[]" value="Kiwifruit" /> Kiwifruit price="$11.95"<br />
			<input type="checkbox" name="Foods[]" value="Other" /> Other price="$11.95"<br />
		</fieldset>
	</div>
	
		<div>	
		<fieldset>
			<legend>Would you like to join our mailing list?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="50"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
		</fieldset>
	</div>
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us, thank you!" tabindex="60"></textarea>
		</label>
	</div>	
	<div><?=$feedback?></div>
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
	<div>
		<input type="Submit" value="Submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
<?php
}
?>




<?php include 'includes/footer.php';?> 
    
