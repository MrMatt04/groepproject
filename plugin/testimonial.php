<?php
/**
* Plugin Name: Testimonial
* Plugin URI: gluwebURL
* Description: hier kun je testimonials maken
Version: 1.0.0
Author: project :)
Author URI: gluwebURL
License: GPL-2.0+
*/

// Voeg html toe onderin de pagina.
add_action('get_header','mybox');
function mybox(){
  echo '<div class="infobox">Hier komt wat informatie</div>';
}
// Voeg styling toe in de <head>.
add_action('get_header','mystyles');
function mystyles(){
  echo '<style>
  .infobox{
     background-color:black;
   width:100%;
   height:54px;
   color:white;
   display:flex;
   justify-content:center;
   align-items:center;
 }
 </style>';
}
?>
