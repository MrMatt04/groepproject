>
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

// function enqueue_my_custom_styles(){
//   wp_register_style(('testmonial'), plugins_url('testmonial/style.css'));
//   wp_enqueue_style('testmonial');
// }
// add_action('wp_enqueue_scripts' , 'enqueue_my_custom_styles');

// Voeg html toe onderin de pagina.
add_action('get_footer','mybox');
function mybox(){
  echo '<div class="infobox">
  '.get_option('footer_text').'
  </div>';
}

// Voeg styling toe in de <head>.
add_action('get_header','mystyles');
function mystyles(){ 
  
  
    
  echo '<style>


  .infobox{
     background-color:black;
   width:100%;
   height:100px;
   color:white;
   display:flex;
   justify-content:center;
   align-items:center;
   text-align: center;

   
  
   }
  
 </style>';
}

add_action('admin_menu', 'mijnplugin_menu');
function mijnplugin_menu(){
 add_menu_page('Wijzig tekst','Eigen plugin','manage_options','eigenplugin_settings_page','mijnplugin_page');
}
function mijnplugin_page(){
 echo '<h2>'.__('Footer Instellingen','menu-test').'</h2>';
 include_once('eigenplugin_settings_page.php');
}



// <form action="" method="get">
//     <textarea name="testimonial" id="testimonial" cols="30" rows="5" maxlength="255"></textarea>
//     <input type="submit" value="Submit">
// </form>

?>

