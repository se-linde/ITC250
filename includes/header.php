<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <!--<title>ARaynorDesign Template</title>-->
    
    <title><?=$title?></title>
    
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
    <?=$loadhead;?>
</head>

<body>
  <div id="main">
    <div id="header">
	  <div id="banner">
	    <div id="welcome">
	      <h1>Welcome To Spinifex</h1>
            <h2><?=$pageID?></h2>
	    </div><!--close welcome-->
        <div id="menubar">
        <ul id="menu">
   
        <?=makeLinks($nav1)?>
            
            <!-- <li class="current"><a href="index.html">Home</a></li>
            <li><a href="ourwork.html">Our Work</a></li>
            <li><a href="testimonials.html">Testimonials</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="contact.html">Contact Us</a></li> -->
             
          </ul> 
            
        </div><!--close menubar-->	  
	  </div><!--close banner-->	
    </div><!--close header-->	
    
	<div id="site_content">		

      <div class="slideshow">  
		<ul class="slideshow">
          <li class="show"><img width="900" height="350" <?=$pic?> alt="spinifex" /></li>
          
        </ul> 
      </div><!--close slideshow-->		
	 
    <!-- header ends here -->    
    <?=showFeedback();?>    
    