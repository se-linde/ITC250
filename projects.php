<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?> 


<h1>Order Your Baja Tacos Here!</h1>


<section>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">

	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
		
    
    <p>
        <h2>Main Dishes!</h2>
        <p>Note: If you would like to order more than 9 items, please contact our Catering Department at 206-555-1212, and ask for Bones Tacoman.</p>
        
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
    <p>
        <h2>Sides</h2>    
    <div>	
		<label>
			Sides: Guacamole<br />
            Hand-mixed, with Haas avocados and fresh cilantro. <br />
            $1.95 per order. <br />
			<select name="Sides_Guacamole" required title="0" tabindex="15">
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
			Sides: Salsa<br />
            Our house salsa, with Habanero peppers and tomatillos. Extra spicy! <br />
            $0.95 per order. <br />
			<select name="Sides_Salsa" required title="0" tabindex="15">
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
			Sides: Sour Cream<br />
            Have a little cream to cool off, after that salsa! <br />
            $0.45 per order. <br />
			<select name="Sides_SC" required title="0" tabindex="15">
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
			Sides: Tortilla Chips<br />
            Freshly made with our own tortillas! <br />
            $1.95 per order. <br />
			<select name="Sides_TC" required title="0" tabindex="15">
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
    <p></p>    

	<div>
		<input type="Submit" value="Order your delicious food here!" />
	</div>
    </form>
	<!-- END HTML FORM -->
   
</section>

<?php include 'includes/aside2.php';?>

<?php

?>


<!-- </*?php include 'includes/footer.php';?*/>
    
