<?php
//food truck assignment 
//item class module

class item{

public $name = '';
public $description = '';
public $price = 0;
public $quantity = 0;


    public function __construct($name, $description, $price){

     $this->name = $name;
     $this->description = $description;
     $this->price = $price;
        
    }//end class constructor
    
}//end of item class

$items[] = new item('Mahi Mahi Tacos', 'A delicious combination of fresh Mahi Mahi with seasoned coleslaw - $9.95', 9.95);
$items[] = new item('Halibut Tacos', 'Alaskan Halibut with just the right amount of spice!! - $13.95', 13.95);
$items[] = new item('Shrimp Tacos','Baja style shrimp with your choice of softshell or hardshell', 7.95);
$items[] = new item('Tofu Tacos','Vegetarians escape to the gulf of Mexico.', 6.95);
$items[] = new item('Big Kahuna Burrito','A mega combo of steak, chicken, and chorizo, mixed with chipotle beans', 9.95);
$items[] = new item('Gazpacho','Andalusian cold soup, served with fresh corn tortillas', 9.95);

// add Sides to item Class
$sides[] = new item('Guacamole','Hand-mixed, with Haas avocados and fresh cilantro.',1.95);
$sides[] = new item('Salsa','Our house salsa, with Habanero peppers and tomatillos. Extra spicy!',0.95);
$sides[] = new item('Sour Cream','Have a little cream to cool off, after that salsa! ',0.45);
$sides[] = new item('Tortilla Chips','Freshly made with our own tortillas!',1.95);

//test
/*echo $item6->Name . "<br />";
echo $item6->Description . "<br />";
echo $item6->Price;
*/
