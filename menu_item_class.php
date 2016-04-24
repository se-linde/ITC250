<?php
//food truck assignment 
//item class module

class item{

public $Name = '';
public $Description = '';
public $Price = 0;    


    public function __construct($Name, $Description, $Price){

     $this->Name = $Name;
     $this->Description = $Description;
     $this->Price = $Price;
        
    }//end class constructor
    
}//end of item class

$item1 = new item('Mahi Mahi Tacos', 'A delicious combination of fresh Mahi Mahi with seasoned coleslaw', 9.95);
$item2 = new item('Halibut Tacos', 'Alaskan Halibut with just the right amount of spice!!', 13.95);
$item3 = new item('Shrimp Tacos', 'Baja style shrimp with your choice of softshell or hardshell', 7.95);
$item4 = new item('Tofu Tacos', 'Vegetarians escape to the gulf of Mexico', 6.95);
$item5 = new item('Big Kahuna Burrito', 'Your choice of beef, chicken or steak', 9.95);
$item6 = new item('Gazpacho', 'Andalusian cold soup consisting of bread, tomato, cucumber, bell pepper, onion and garlic, olive oil, wine vinegar, water, and salt', 9.95);
//test
/*echo $item6->Name . "<br />";
echo $item6->Description . "<br />";
echo $item6->Price;
*/
